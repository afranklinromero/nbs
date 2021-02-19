<?php

namespace App\Http\Controllers;

use App\Mail\MailSugerenciasNBS;
use App\Modelos\SugerenciasNBS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SugerenciasNBSController extends Controller
{
    //

    public function index(Request $request){

        $sugerenciasnbss = SugerenciasNBS::orderby('id', 'DESC')->paginate(5);
        /*
        if ($request->ajax())
            return view('sugerenciasnbs.aside.index', compact('sugerenciasnbss'))
            ->with('info', 'Aqui se muestran los mensajes de sujerencias')
            ->render();
            */
        return view('sugerenciasnbs.index', compact('sugerenciasnbss'))->with('info', 'hoa hola');
    }

    public function show(Request $request, $id){
        $sugerenciasnbs = SugerenciasNBS::find($id);
        if ($request->ajax())
            return view('sugerenciasnbs.aside.show', compact('sugerenciasnbs'))->render();
        return view('sugerenciasnbs.show', compact('sugerenciasnbs'));
    }

    public function create(Request $request)
    {
        if ($request->ajax())
            return view('sugerenciasnbs.aside.create')->render();
        return view('sugerenciasnbs.create');
    }

    public function update(Request $request, $id)
    {
        $sugerenciasnbs = SugerenciasNBS::find($id);
        $sugerenciasnbs->estado = 0;
        $sugerenciasnbs->save();
        $sugerenciasnbss = SugerenciasNBS::orderby('id', 'DESC')->where('estado', 1)->paginate(5);
        if ($request->ajax()){

            
            return view('sugerenciasnbs.aside.index', compact('sugerenciasnbss'))->render();
        }
        
        return redirect()->route('sugerenciasnbs.index');
    }

    public function store(Request $request)
    {
        $sugerenciasnbs = new SugerenciasNBS($request->all());
        //dd($sugerenciasNBS);
        $sugerenciasnbs->save();
        Mail::to('info@nbs.com')->queue(new MailSugerenciasNBS($sugerenciasnbs));

        if ($request->ajax())
            return view('sugerenciasnbs.aside.create')->render();
        return view('sugerenciasnbs.create');
    }
}
