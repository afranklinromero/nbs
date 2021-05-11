<?php

namespace App\Http\Controllers;

use App\Modelos\Publicidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class publicidadController extends Controller
{
    //
    public function index(Request $request){
        $publicidades = Publicidad::orderBy('id', 'desc')->paginate(12);
        return view('publicidad.index', compact('publicidades'));
    }

    public function show(Request $request, $id){
        $publicidad = publicidad::find($id);
        return view('publicidad.show', compact('publicidad'));
    }

    public function create(Request $request){
        return view('publicidad.create');
    }

    public function store(Request $request){
        $publicidad = new publicidad($request->all());

        $publicidad->estado = 1;

        $publicidad->save();


        //$request->file('multimedia')->storeAs('public/publicidad/', $publicidad->id . '.png');
        $image = $request->file('multimedia');
        $imagen = $image->getClientOriginalName();
        $formato = $image->getClientOriginalExtension();
        $image->move(public_path().'/img/publicidad/', $publicidad->id . '.png');
        //dd($image);
        //Storage::put('/public/publicidad/'.$publicidad->id . '.png', \File::get);

        if ($request->ajax())
            return redirect()->route('publicidad.show', $publicidad->id);

        return redirect()->route('publicidad.show', $publicidad->id);
    }

    public function edit(Request $request, $id){
        $publicidad = publicidad::find($id);
        return view('publicidad.edit', compact('publicidad'));
    }

    public function update(Request $request, $id){
        $publicidad = publicidad::find($id);

        $publicidad->titulo = $request->titulo;
        if (isset($request->multimedia)){
            $image = $request->file('multimedia');
            $imagen = $image->getClientOriginalName();
            $formato = $image->getClientOriginalExtension();
            $image->move(public_path().'/img/publicidad/', $publicidad->id . '.png');
        }
        $publicidad->contenido = $request->contenido;
        $publicidad->link = $request->link;
        $publicidad->fechaini = $request->fechaini;
        $publicidad->fechafin = $request->fechafin;
        $publicidad->updated_at = now();


        //$publicidad->estado = 1;

        $publicidad->save();


        if ($request->ajax())
            return redirect()->route('publicidad.show', $publicidad->id);

        return redirect()->route('publicidad.show', $publicidad->id);
    }
}
