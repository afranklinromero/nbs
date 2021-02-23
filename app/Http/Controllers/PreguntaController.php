<?php

namespace App\Http\Controllers;

use App\Modelos\Pregunta;
use App\Modelos\Tema;
use App\Modelos\Concurso;
use App\Http\Requests\PreguntaRequest;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    //
    public function index(Request $request){

        $preguntas = Pregunta::orderby('id', 'DESC')->where('estado', 1)->paginate(5);
        $request->session()->put('info', 'Listado de preguntas');
        if ($request->ajax())
            return view('pregunta.aside.index', compact('preguntas'))
            ->render();

        return view('pregunta.index', compact('preguntas'));
    }

    public function show(Request $request, $id){
        $pregunta = Pregunta::find($id);
        $request->session()->put('info', 'Detalle pregunta');
        if ($request->ajax())
            return view('pregunta.aside.show', compact('pregunta'))->render();
        return view('pregunta.show', compact('pregunta'));
    }

    public function create(Request $request)
    {
        $temas = Tema::where('estado', '1')->orderby('nombre', 'ASC')->get();
        $request->session()->put('info', 'Ingrese los datos requeridos');
        if ($request->ajax())
            return view('pregunta.aside.create', compact('temas'))->render();
        return view('pregunta.create', compact('temas'));
    }

    public function update(Request $request, $id)
    {
        $pregunta = pregunta::find($id);
        $pregunta->estado = 0;
        $pregunta->save();
        $preguntas = pregunta::orderby('id', 'DESC')->where('estado', 1)->paginate(5);
        if ($request->ajax()){


            return view('pregunta.aside.index', compact('preguntas'))->render();
        }

        return redirect()->route('pregunta.index');
    }

    public function store(PreguntaRequest $request)
    {
        $pregunta = new pregunta($request->all());
        
        //dd($pregunta);
        dd($pregunta);
        $pregunta->save();

        if ($request->ajax())
            return view('pregunta.aside.create')->render();
        return view('pregunta.create');
    }
}
