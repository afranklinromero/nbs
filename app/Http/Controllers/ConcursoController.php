<?php

namespace App\Http\Controllers;

use App\Modelos\Concurso;
use App\Modelos\Configuracion;
use App\Modelos\Pregunta;
use App\Modelos\Respuesta;
use App\Modelos\Tema;
use App\Modelos\Temaconcurso;
use DateTime;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Mime\Message;

class ConcursoController extends Controller
{
    //
    public $n = 10;
    public $preguntas = null;

    public function __construct(Request $request)
    {
        $this->middleware('auth');

        /*if (!Auth::user()->hasRole('admin'))
            abort(403);*/
    }

    public function index(Request $request){

        //CONCURSOS
        $concursoEstado = 1;
        if (isset($request->concursoEstado)) $concursoEstado = $request->concursoEstado;

        $temaconcursos=Temaconcurso::orderBy('id', 'DESC')->paginate(5)->setPath(route('temaconcurso.index'));;

        //$request->session()->put('info', 'Listado de concursos');

        //PREGUNTAS
        $preguntaEstado = 3;
        if (isset($request->preguntaEstado)) $preguntaEstado = $request->preguntaEstado;

        if ($preguntaEstado == 3)
            $preguntas = Pregunta::orderby('id', 'DESC');
        else
            $preguntas = Pregunta::orderby('id', 'DESC')->where('estado', $preguntaEstado);

        if (!Auth::user()->hasRole('admin')) $preguntas = $preguntas->where('user_id', Auth::user()->id);

        
        $preguntas = $preguntas->paginate(5)->setPath(route('pregunta.index'));
        
        //dd($preguntas);



        return view('concurso.index',compact('temaconcursos', 'concursoEstado', 'preguntas', 'preguntaEstado'));
    }

    public function buscar(Request $request){
        //dd($request->dato);
        $dato = $request->dato;
        $concursos=Concurso::where('titulo', 'like', '%'.$dato.'%')->orderBy('id', 'DESC')->paginate(10);
        return view('concurso.index',compact('concursos', 'dato'));
    }

    public function show ($id){
        $concurso = Concurso::find($id);

        return view('concurso.show', compact('concurso'));
    }

    public function juegos(Request $request){
        //$temaconcursos = Temaconcurso::where('estado', '1')->orderBy('id', 'DESC')->;
        $temaconcursos = Temaconcurso::join('concurso', 'temaconcurso.concurso_id', 'concurso.id')->where('concurso.estado', 1)->orderBy('concurso.id', 'DESC')->paginate();
        //dd($temaconcursos);
        return view('concurso.juegos', compact('temaconcursos'));
    }

    public function jugar(Request $request, $temaconcurso_id){
        $temaconcurso = Temaconcurso::find($temaconcurso_id);

        $enfecha = $temaconcurso->concurso->fechaini < now() && now() < $temaconcurso->concurso->fechafin;
        

        $pregunta = null;
        $respuestas = null;
        if(!isset($temaconcurso)) return redirect()->route('concurso.index')->with('info-concurso', 'registro no encontrado');
        $paymentDate = new DateTime($temaconcurso->concurso->fechaini);
        //dd($paymentDate);
        //if(!isset($temaconcurso) && $temaconcurso->concurso->fechaini) return redirect()->route('concurso.index')->with('info-concurso', 'registro no encontrado');

        
            $n = $temaconcurso->concurso->configuracion->nropreguntas;
            $index = 1;
            $preguntas = Pregunta::where('tema_id', $temaconcurso->tema->id)->where('estado', '1')->inRandomOrder()->limit(10);
            
            if(isset($preguntas) && count($preguntas->get()) > 0){
                $pregunta = $preguntas->first();
                $respuestas = $pregunta->respuestas()->inRandomOrder()->get();
                return view('concurso.jugar', compact('pregunta', 'respuestas', 'index', 'n', 'temaconcurso'));
            } else {
                $request->session()->put('info-concurso', 'No existen las preguntas suficientes para el concurso');
                $request->session()->put('info', 'Listado de concursos');
                
                return redirect()->route('concurso.index');
            }

    }

    public function siguientepregunta(Request $request, $index, $temaconcurso_id, $preguntaanterior_id){

        $temaconcurso = Temaconcurso::find($temaconcurso_id);
        $n = $temaconcurso->concurso->configuracion->nropreguntas;
        if ($index < $n){
            do {
                $pregunta = Pregunta::where('tema_id', $temaconcurso->tema->id)->where('estado', '1')->orderByRaw('rand()')->take(1)->get()->first();
            }
            while($preguntaanterior_id == $pregunta->id);

            $respuestas = $pregunta->respuestas->shuffle();

            $index++;

            if ($request->ajax()){
                return response()->json(\view('concurso.aside.siguientepregunta', \compact('index', 'pregunta', 'respuestas', 'temaconcurso'))->render());
            }
        } else {
            return 'endgame';
        }
    }

    public function responder(Request $request, $mirespuesta_id){
        if ($request->ajax()){
            $escorrecta = $mirespuesta = Respuesta::find($mirespuesta_id)->escorrecta;
            return $escorrecta;
        }
    }
/*
    public function responder(Request $request, $index, $pregunta_id, $mirespuesta_id){
        if ($request->ajax()){
            $pregunta = Pregunta::find($pregunta_id);
            $mirespuesta = Respuesta::find($mirespuesta_id);
            return response()->json(\view('concurso.aside.responder', \compact('index', 'pregunta', 'mirespuesta'))->render());
        }

    }
*/
    public function create(){
        $temas = Tema::where('estado', '1')->orderby('nombre', 'ASC')->get();
        return view('concurso.create', compact('temas'));
    }

    public function store (Request $request){
        $configuracion = new Configuracion($request->only(['nropreguntas', 'limiterespuestaserroneas', 'puntosporrespuesta', 'tiempolimite']));
        $configuracion->save();

        $concurso = new Concurso($request->only(['nombre', 'descripcion', 'picture', 'fechaini', 'fechafin']));
        $concurso->user_id = Auth::user()->id;
        $concurso->configuracion_id = $configuracion->id;

        $concurso->save();

        $temaconcurso = new Temaconcurso([
            'tema_id' => $request->tema_id,
            'concurso_id' => $concurso->id
        ]);

        $temaconcurso->save();

        return redirect()->route('concurso.index')
                        ->with('info','El Tipoproducto fue guardado');


   }

    public function edit($id){
        $concurso = Concurso::find($id);
        return view('concurso.edit', compact('concurso'));
    }

    public function update (Request $request, $id){
        $temaconcurso = Temaconcurso::find($id);

        $temaconcurso->estado = $request->estado;
        $temaconcurso->concurso->estado = $request->estado;
        $temaconcurso->updated_at = now();
        $temaconcurso->concurso->updated_at = now();

        $temaconcurso->save();

        return redirect()->route('concurso.index')
                        ->with('info','El Tipoproducto fue actualizado');


   }

   public function destroy ($id){
       $concurso = Concurso::find($id);
       $concurso->delete();
       return back ()->with('info', 'El Tipoproducto fue eliminado');
    }

    public function obtener(Request $request){
        $concursos = Concurso::orderby('nombre', 'ASC')->get();
        if ($request->ajax()){
            //dd(view('ventas.aside.productos', compact('$precioproductos'))->render());
            return view('ventas.aside.libros', compact('concursos'))->render();

        } else {
            return "Obtener libros";
        }
    }

}
