<?php

namespace App\Http\Controllers;

use App\Mail\MailSugerenciasNBS;
use App\Modelos\SugerenciasNBS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SugerenciasNBSController extends Controller
{
    //

    public function show(Request $request, $id){
        $sugerenciasNBS = SugerenciasNBS::find($id);
        return view('sugerenciasnbs.show', compact('sugerenciasNBS'));
    }

    public function create(Request $request)
    {

        return view('sugerenciasnbs.create');
    }

    public function store(Request $request)
    {
        $sugerenciasNBS = new SugerenciasNBS($request->all());
        //dd($sugerenciasNBS);
        $sugerenciasNBS->save();
        Mail::to('info@nbs.com')->queue(new MailSugerenciasNBS($sugerenciasNBS));
        return 'Correo enviado correctamente';
    }
}
