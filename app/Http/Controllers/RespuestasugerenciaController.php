<?php

namespace App\Http\Controllers;

use App\Modelos\Respuestasugerencia;
use App\Modelos\Sugerencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RespuestasugerenciaController extends Controller
{
    //
    public function create()
    {
        return view('respuestasugerencia.create');
    }

    public function createBySugerencia_id($sugerencia_id)
    {
        $sugerencia = Sugerencia::find($sugerencia_id);
        return view('respuestasugerencia.create', compact('sugerencia'));
    }

    public function store(Request $request)
    {

        $respuestasugerencia = new Respuestasugerencia();
        $respuestasugerencia->fill($request->all());
        $respuestasugerencia->user_id = Auth::user()->id;
        $respuestasugerencia->save();
        return redirect()->route('sugerencia.show', $respuestasugerencia->sugerencia_id);
    }

    public function destroy(Request $request, $id){
        //dd('destruir');
        if(!Auth::check()) return redirect()->route('libro.index');
        if (!Auth::user()->hasRole('admin')) return redirect()->route('libro.index');

        $respuestasugerencia = Respuestasugerencia::find($id);
        /*
        $blog->estado = 0;
        $blog->updated_at = now();
        */
        $respuestasugerencia->delete();
        return redirect()->route('sugerencia.show', $respuestasugerencia->sugerencia_id)->with('info', 'Articulo dado de baja!');
    }
}
