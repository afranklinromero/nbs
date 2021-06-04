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
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        Auth::user()->authorizeRoles(['admin']);

        $sugerenciasnbss = SugerenciasNBS::where('estado', '<>','0')->orderby('id', 'DESC')->paginate(5);
        $request->session()->put('info', 'Listado de sugerencias desde la mas reciente a la mas antigua');

        if ($request->ajax())
            return view('sugerenciasnbs.aside.index', compact('sugerenciasnbss'))
            ->render();

        return view('sugerenciasnbs.index', compact('sugerenciasnbss'));
    
    }

    public function show(Request $request, $id){
        Auth::user()->authorizeRoles(['admin']);
        
            $sugerenciasnbs = SugerenciasNBS::find($id);
            if ($request->ajax())
                return view('sugerenciasnbs.aside.show', compact('sugerenciasnbs'))->render();
            return view('sugerenciasnbs.show', compact('sugerenciasnbs'));
    }

    public function showme($id){
        Auth::user()->authorizeRoles(['admin']);
        $sugerenciasnbs = SugerenciasNBS::find($id);
        $sugerenciasnbs->estado=2;
        $sugerenciasnbs->save();
        
        return redirect()->route('sugerenciasnbs.show', $sugerenciasnbs->id);
    }

    public function create(Request $request)
    {
        Auth::user()->authorizeRoles(['admin','user']);
        if ($request->ajax())
            return view('sugerenciasnbs.aside.create')->render();
        return view('sugerenciasnbs.create');
    }

    public function update(Request $request, $id)
    {
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
        Auth::user()->authorizeRoles(['user', 'admin']);
            $sugerenciasnbs = new SugerenciasNBS($request->all());
            //dd($sugerenciasNBS);
            $sugerenciasnbs->save();
            //$request->session()->put('info', 'Sugerencia enviada!!');
            //Mail::to('info@sofcruz.com')->queue(new MailSugerenciasNBS($sugerenciasnbs));

            if ($request->ajax()){
                return view('sugerenciasnbs.aside.create')->render();
            }

            return  redirect()->route('sugerenciasnbs.create')->with('info', 'Hemos recibido su mensaje, muchas gracias por sus sugerencias!');
    }


}
