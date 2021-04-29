<?php

namespace App\Http\Controllers;

use App\Modelos\Temaconcurso;
use Illuminate\Http\Request;

class TemaconcursoController extends Controller
{
    //
    public function index(Request $request){
        $concursoEstado = 3;

        if (isset($request->concursoEstado)) $concursoEstado = $request->concursoEstado;

        if ($concursoEstado == 3)
            $temaconcursos = Temaconcurso::orderby('id', 'DESC');
        else
            $temaconcursos = Temaconcurso::orderby('id', 'DESC')->where('estado', $concursoEstado);

        $temaconcursos = $temaconcursos->paginate(5)->setPath(route('temaconcurso.index'));;


        if ($request->ajax()){
           // $temaconcursos = Temaconcurso::orderBy('id', 'DESC')->paginate(5)->setPath(route('temaconcurso.index'));
            return view('concurso.index.concurso',compact('temaconcursos', 'concursoEstado'))->render();
        }
    }
}
