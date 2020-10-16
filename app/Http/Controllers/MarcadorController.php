<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Marcador;

class MarcadorController extends Controller
{
    //
    public function index(){
        $marcadores=Marcador::where('libro_id', '=', $libro_id)->orderBy('id', 'DESC')->paginate(10);
        return view('marcador.index',compact('marcadores'));
    }

    public function buscar(Request $request, $libro_id, $nombre){
        //dd($request->dato);
        dd($libro. ' ' . $nombre);
        $marcadors=Marcador::where('titulo', 'like', '%'.$request->dato.'%')->orderBy('id', 'DESC')->paginate(10);
        return view('marcador.index',compact('marcadors'));
    }

    public function show ($id){
        $marcador = Marcador::find($id);
        return view('marcador.show', compact('marcador'));
    }

    public function create(){
        return view('marcador.create');
    }

    public function store (Request $request){

        $marcador = new marcador();
        $marcador->titulo = $request->titulo;
        $marcador->fecha = $request->fecha;
        $marcador->tapa = $request->tapa;
        $marcador->documentopdf = $request->documentopdf;
        $marcador->edicion = $request->edicion;
        $marcador->serie = $request->serie;
        $marcador->nropublicacion = $request->nropublicacion;
        $marcador->lugarpublicacion = $request->lugarpublicacion;
        $marcador->created_at = now();
        $marcador->updated_at = now();
        $marcador->estado = 1;
        $marcador->save();

        return redirect()->route('marcador.index')
                        ->with('info','El Tipoproducto fue guardado');


   }


    public function edit($id){
        $marcador = Marcador::find($id);
        return view('marcador.edit', compact('marcador'));
    }

    public function update (Request $request, $id){

        $marcador = Marcador::find($id);

        $marcador->titulo = $request->titulo;
        $marcador->fecha = $request->fecha;
        $marcador->tapa = $request->tapa;
        $marcador->documentopdf = $request->documentopdf;
        $marcador->edicion = $request->edicion;
        $marcador->serie = $request->serie;
        $marcador->nropublicacion = $request->nropublicacion;
        $marcador->lugarpublicacion = $request->lugarpublicacion;
        $marcador->updated_at = now();

        $marcador->save();

        return redirect()->route('marcador.index')
                        ->with('info','El Tipoproducto fue actualizado');


   }

   public function destroy ($id){
       $marcador = Marcador::find($id);
       $marcador->delete();
       return back ()->with('info', 'El Tipoproducto fue eliminado');
    }

    public function obtener(Request $request){
        $marcadors = Marcador::orderby('nombre', 'ASC')->get();
        if ($request->ajax()){
            //dd(view('ventas.aside.productos', compact('$precioproductos'))->render());
            return view('ventas.aside.marcadors', compact('marcadors'))->render();

        } else {
            return "Obtener marcadors";
        }
    }
}
