<?php

namespace App\Http\Controllers;

use App\Modelos\Pregunta;
use App\Modelos\Tema;
use App\Modelos\Concurso;
use App\Http\Requests\PreguntaRequest;
use App\Modelos\Respuesta;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreguntaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $paginate = 10;
        Auth::user()->authorizeRoles(['admin', 'user']);
        $preguntaEstado = 3;
        $user_id = Auth::user()->id;
        if (isset($request->preguntaEstado)){
            $preguntaEstado = $request->preguntaEstado;
            //dd($preguntaEstado);
        }
        //dd('333333333');
        $preguntas = null;
        if (Auth::user()->hasRole('admin')){
            //de todos los usuarios, no hase filtro por usuario
            //ni por estado
            $preguntas = Pregunta::orderBy('estado', 'DESC')->orderBy('id', 'DESC');
        }
        else {//preguntas del usuario logeado
            $preguntas = Pregunta::orderBy('estado', 'DESC')->orderBy('id', 'DESC')->where('user_id', $user_id);
        }

        if ($preguntaEstado<>3)
            $preguntas = $preguntas->where('estado', $preguntaEstado);

        $preguntas = $preguntas->paginate($paginate)->setPath(route('pregunta.index'));
        //dd('lkajsdf');
        if ($request->ajax()){
            //dd('qwerqwerqwer');
            return view('pregunta.aside.index', compact('preguntas', 'preguntaEstado'))
            ->render();
        }

        return view('pregunta.index', compact('preguntas', 'preguntaEstado'));

    }

    public function show(Request $request, $id){
        Auth::user()->authorizeRoles(['admin', 'user']);
        $pregunta = Pregunta::find($id);
        $request->session()->put('info', 'Detalle pregunta');
        if ($request->ajax())
            return view('pregunta.aside.show', compact('pregunta'))->render();
        return view('pregunta.show', compact('pregunta'));
    }

    public function create(Request $request)
    {
        Auth::user()->authorizeRoles(['admin', 'user']);

        $temas = Tema::where('estado', '1')->orderby('nombre', 'ASC')->get();
        $request->session()->put('info', 'Ingrese los datos requeridos');
        if ($request->ajax())
            return view('pregunta.aside.create', compact('temas'))->render();
        return view('pregunta.create', compact('temas'));
    }



    public function store(PreguntaRequest $request)
    {
        Auth::user()->authorizeRoles(['admin', 'user']);

        $pregunta = new Pregunta($request->all());

        $pregunta->estado = (Auth::user()->hasRole('admin'))?1: 2;//estado pendiente revision

        $pregunta->save();
        $valrespuestas = $request->respuestas;

        foreach ($valrespuestas as $key => $valrespuesta) {
            $respuesta = new Respuesta([
                'pregunta_id' => $pregunta->id,
                'respuesta' => $valrespuesta,
                'escorrecta' => (($key==$request->escorrecta)? 1 : 0),
            ]);

            $respuesta->save();
        }

        //$pregunta->save();

        if ($request->ajax())
            return redirect()->route('pregunta.show', $pregunta->id);
        return redirect()->route('pregunta.show', $pregunta->id);
    }

    public function edit($id){

        Auth::user()->authorizeRoles(['admin']);
        $temas = Tema::where('estado', '1')->orderby('nombre', 'ASC')->get();
        $pregunta = Pregunta::find($id);
        $respuestas = Respuesta::where('pregunta_id', $pregunta->id)->where('estado', 1)->get();
        return view('pregunta.edit', compact('pregunta', 'respuestas', 'temas'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->escorrectas);
        Auth::user()->authorizeRoles(['admin', 'user']);
        $pregunta = pregunta::find($id);
        $pregunta->fill($request->all());
        $pregunta->save();

        $valrespuestas = $request->respuestas;

        foreach ($request->respuestas_id as $i=>$respuesta_id) {
            $respuesta = Respuesta::find($respuesta_id);
            $respuesta->respuesta = $request->respuestas[$i];
            $respuesta->escorrecta = $request->escorrectas[$i];
            $respuesta->save();
        }

        if ($request->ajax()){
            return redirect()->route('pregunta.index', ['page' => $request->pagePregunta]);
        }
        return redirect()->route('pregunta.show', $pregunta->id);
    }



    public function destroy(Request $request, $id){
        //dd('destruir');
        if(!Auth::check()) return redirect()->route('concurso.index');
        if (!Auth::user()->hasRole('admin')) return redirect()->route('concurso.index');

        $pregunta = Pregunta::find($id);

        $pregunta->estado = 0;
        $pregunta->save();

        //$pregunta->delete();
        return redirect()->route('concurso.index')->with('info', 'Pregunta eliminada con exito!');
    }

}
