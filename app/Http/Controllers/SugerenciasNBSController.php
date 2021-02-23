<?php

namespace App\Http\Controllers;

use App\Http\Requests\SugerenciasnbsRequest;
use App\Mail\MailSugerenciasNBS;
use App\Modelos\SugerenciasNBS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SugerenciasnbsController extends Controller
{
    //

    public function index(Request $request){

        $sugerenciasnbss = SugerenciasNBS::orderby('id', 'DESC')->paginate(5);
        $request->session()->put('info', 'Listado de sugerencias desde la mas reciente a la mas antigua');

        if ($request->ajax())
            return view('sugerenciasnbs.aside.index', compact('sugerenciasnbss'))
            ->render();

        return view('sugerenciasnbs.index', compact('sugerenciasnbss'));
    }

    public function show(Request $request, $id){
        $sugerenciasnbs = SugerenciasNBS::find($id);
        $request->session()->put('info', 'Detalle registro');
        if ($request->ajax())
            return view('sugerenciasnbs.aside.show', compact('sugerenciasnbs'))->render();
        return view('sugerenciasnbs.show', compact('sugerenciasnbs'));
    }

    public function create(Request $request)
    {
        $request->session()->put('info', 'Ingrese los datos requeridos');
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

    public function store(SugerenciasnbsRequest $request)
    {

            $sugerenciasnbs = new SugerenciasNBS($request->all());
            //dd($sugerenciasNBS);
            $sugerenciasnbs->save();
            $request->session()->put('info', 'Sujerencia enviada!!');
            Mail::to('info@nbs.com')->queue(new MailSugerenciasNBS($sugerenciasnbs));

            if ($request->ajax()){
                return view('sugerenciasnbs.aside.create')->render();
            }

            return view('sugerenciasnbs.create');

    }


}
