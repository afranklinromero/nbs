<?php

namespace App\Http\Controllers;

use App\Modelos\Concurso;
use App\Modelos\Pregunta;
use App\Modelos\Respuesta;
use App\Modelos\Temaconcurso;
use Illuminate\Http\Request;

class ConcursoController extends Controller
{
    //
    public $n = 10;
    public $preguntas = null;

    public function index(){
        $concursos=Concurso::orderBy('id', 'DESC')->paginate(10);
        return view('concurso.index',compact('concursos'));
    }

    public function buscar(Request $request){
        //dd($request->dato);
        $dato = $request->dato;
        $concursos=Concurso::where('titulo', 'like', '%'.$dato.'%')->orderBy('id', 'DESC')->paginate(10);
        return view('concurso.index',compact('concursos', 'dato'));
    }

    public function show ($id){
        $clasificacion = Concurso::find($id);
        return view('concurso.show', compact('concurso'));
    }

    public function juegos(Request $request){
        $temaconcursos = Temaconcurso::where('estado', '1')->orderBy('id', 'DESC')->paginate(10);
        return view('concurso.juegos', compact('temaconcursos'));
    }

    public function jugar(Request $request, $temaconcurso_id){
        
        $temaconcurso = Temaconcurso::find($temaconcurso_id);
        $n = $temaconcurso->concurso->configuracion->nropreguntas;
        $index = 1;
        $preguntas = Pregunta::where('tema_id', $temaconcurso->tema->id)->where('estado', '1')->inRandomOrder()->limit(10);
        $pregunta = $preguntas->first();
        $respuestas = $pregunta->respuestas()->inRandomOrder()->get();
        return view('concurso.jugar', compact('pregunta', 'respuestas', 'index', 'n', 'temaconcurso'));
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
        return view('concurso.create');
    }

    public function store (Request $request){

        $clasificacion = new Concurso();
        $clasificacion->titulo = $request->titulo;
        $clasificacion->fecha = $request->fecha;
        $clasificacion->tapa = $request->tapa;
        $clasificacion->documentopdf = $request->documentopdf;
        $clasificacion->edicion = $request->edicion;
        $clasificacion->serie = $request->serie;
        $clasificacion->nropublicacion = $request->nropublicacion;
        $clasificacion->lugarpublicacion = $request->lugarpublicacion;
        $clasificacion->created_at = now();
        $clasificacion->updated_at = now();
        $clasificacion->estado = 1;
        $clasificacion->save();

        return redirect()->route('concurso.index')
                        ->with('info','El Tipoproducto fue guardado');


   }


    public function edit($id){
        $clasificacion = Concurso::find($id);
        return view('concurso.edit', compact('concurso'));
    }

    public function update (Request $request, $id){

        $clasificacion = Concurso::find($id);

        $clasificacion->titulo = $request->titulo;
        $clasificacion->fecha = $request->fecha;
        $clasificacion->tapa = $request->tapa;
        $clasificacion->documentopdf = $request->documentopdf;
        $clasificacion->edicion = $request->edicion;
        $clasificacion->serie = $request->serie;
        $clasificacion->nropublicacion = $request->nropublicacion;
        $clasificacion->lugarpublicacion = $request->lugarpublicacion;
        $clasificacion->updated_at = now();

        $clasificacion->save();

        return redirect()->route('concurso.index')
                        ->with('info','El Tipoproducto fue actualizado');


   }

   public function destroy ($id){
       $clasificacion = Concurso::find($id);
       $clasificacion->delete();
       return back ()->with('info', 'El Tipoproducto fue eliminado');
    }

    public function obtener(Request $request){
        $clasificacions = Concurso::orderby('nombre', 'ASC')->get();
        if ($request->ajax()){
            //dd(view('ventas.aside.productos', compact('$precioproductos'))->render());
            return view('ventas.aside.libros', compact('concursos'))->render();

        } else {
            return "Obtener libros";
        }
    }

}
