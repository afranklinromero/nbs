<?php

namespace App\Http\Controllers;

use App\Modelos\Pregunta;
use App\Modelos\Concurso;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    //
    public function index(Request $request){

        $preguntas = Pregunta::orderby('id', 'DESC')->where('estado', 1)->paginate(5);
        /*
        if ($request->ajax())
            return view('pregunta.aside.index', compact('preguntas'))
            ->with('info', 'Aqui se muestran los mensajes de sujerencias')
            ->render();
            */
        return view('pregunta.index', compact('preguntas'))->with('info', 'hoa hola');
    }

    public function show(Request $request, $id){
        $pregunta = pregunta::find($id);
        if ($request->ajax())
            return view('pregunta.aside.show', compact('pregunta'))->render();
        return view('pregunta.show', compact('pregunta'));
    }

    public function create(Request $request)
    {
        if ($request->ajax())
            return view('pregunta.aside.create')->render();
        return view('pregunta.create');
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

    public function store(Request $request)
    {
        $pregunta = new pregunta($request->all());
        //dd($pregunta);
        $pregunta->save();
        Mail::to('info@nbs.com')->queue(new Mailpregunta($pregunta));

        if ($request->ajax())
            return view('pregunta.aside.create')->render();
        return view('pregunta.create');
    }
}
