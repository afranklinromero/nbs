<?php

namespace App\Http\Controllers;

use App\Http\Requests\SugerenciasnbsRequest;
use App\Mail\MailSugerenciasNBS;
use App\Modelos\SugerenciasNBS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class SugerenciasnbsController extends Controller
{
    //
    public function index(Request $request){
        if (!Auth::check()) return redirect()->route('libro.index');

        //Auth::user()->authorizeRoles(['admin']);

        if (!Auth::user()->hasRole('admin')) return redirect()->route('libro.index');


        $sugerenciasnbss = SugerenciasNBS::where('estado', '<>','0')->orderby('id', 'DESC')->paginate(20);
        $request->session()->put('info', 'Listado de sugerencias desde la mas reciente a la mas antigua');

        if ($request->ajax())
            return view('sugerenciasnbs.aside.index', compact('sugerenciasnbss'))
            ->render();

        return view('sugerenciasnbs.index', compact('sugerenciasnbss'));

    }

    public function show(Request $request, $id){
        if (!Auth::check()) return redirect()->route('libro.index');

        Auth::user()->authorizeRoles(['admin']);

        $sugerenciasnbs = SugerenciasNBS::find($id);
        if ($request->ajax())
            return view('sugerenciasnbs.aside.show', compact('sugerenciasnbs'))->render();
        return view('sugerenciasnbs.show', compact('sugerenciasnbs'));
    }

    public function showme($id){
        if (!Auth::check()) return redirect()->route('libro.index');
        Auth::user()->authorizeRoles(['admin']);
        $sugerenciasnbs = SugerenciasNBS::find($id);
        $sugerenciasnbs->estado=2;
        $sugerenciasnbs->save();

        return redirect()->route('sugerenciasnbs.show', $sugerenciasnbs->id);
    }

    public function create(Request $request)
    {
        if ($request->ajax())
            return view('sugerenciasnbs.aside.create')->render();
        return view('sugerenciasnbs.create');
    }

    public function update(Request $request, $id)
    {
        if (!Auth::check()) return redirect()->route('libro.index');
        Auth::user()->authorizeRoles(['admin']);
        if (Auth::user()->hasRole('admin')){
            $sugerenciasnbs = SugerenciasNBS::find($id);
            $sugerenciasnbs->estado = 0;
            $sugerenciasnbs->save();
            $sugerenciasnbss = SugerenciasNBS::orderby('id', 'DESC')->where('estado', 1)->paginate(5);
            return redirect()->route('sugerenciasnbs.index');
        }
        else return redirect()->route('sugerenciasnbs.create');
    }

    public function store(SugerenciasnbsRequest $request)
    {
            $sugerenciasnbs = new SugerenciasNBS($request->all());
            //$sugerenciasnbs->user_id = (Auth::check()? Auth::user()->id : 2); //3 user id invitado
            //dd($sugerenciasnbs);

            $sugerenciasnbs->save();
            //$request->session()->put('info', 'Sugerencia enviada!!');
            //Mail::to('info@sofcruz.com')->queue(new MailSugerenciasNBS($sugerenciasnbs));

            if ($request->ajax()){
                return view('sugerenciasnbs.aside.create')->render();
            }

            return  redirect()->route('sugerenciasnbs.create')->with('info', 'Hemos recibido su mensaje, muchas gracias por sus sugerencias!');
    }


}
