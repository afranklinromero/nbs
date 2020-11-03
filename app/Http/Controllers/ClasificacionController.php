<?php

namespace App\Http\Controllers;

use App\Modelos\Clasificacion;
use App\Modelos\Concurso;
use Illuminate\Http\Request;

class ClasificacionController extends Controller
{
    //
    public function index(){
        $concursos=Concurso::orderBy('id', 'DESC')->paginate(10);
        return view('clasificacion.index',compact('concursos'));
    }

    public function buscar(Request $request){
        //dd($request->dato);
        $dato = $request->dato;
        $clasificaciones=Clasificacion::where('titulo', 'like', '%'.$dato.'%')->orderBy('id', 'DESC')->paginate(10);
        return view('clasificacion.index',compact('clasificaciones', 'dato'));
    }

    public function show ($id){
        $clasificacion = Clasificacion::find($id);
        return view('clasificacion.show', compact('clasificacion'));
    }

    public function create(){
        return view('clasificacion.create');
    }

    public function store (Request $request){

        $clasificacion = new Clasificacion();
        $clasificacion->titulo = $request->titulo;
        $clasificacion->fecha = $request->fecha;
        $clasificacion->tapa = $request->tapa;
        $clasificacion->documentopdf = $request->documentopdf;
        $clasificacion->edicion = $request->edicion;
        $clasificacion->serie = $request->serie;
        $clasificacion->nropublicacion = $request->nropublicacion;
        $clasificacion->lugarpublicacion = $request->lugarpublicacion;
        $clasificacion->created_at = now();
        $clasificacion->updated_at = now();
        $clasificacion->estado = 1;
        $clasificacion->save();

        return redirect()->route('clasificacion.index')
                        ->with('info','El Tipoproducto fue guardado');


   }


    public function edit($id){
        $clasificacion = Clasificacion::find($id);
        return view('clasificacion.edit', compact('clasificacion'));
    }

    public function update (Request $request, $id){

        $clasificacion = Clasificacion::find($id);

        $clasificacion->titulo = $request->titulo;
        $clasificacion->fecha = $request->fecha;
        $clasificacion->tapa = $request->tapa;
        $clasificacion->documentopdf = $request->documentopdf;
        $clasificacion->edicion = $request->edicion;
        $clasificacion->serie = $request->serie;
        $clasificacion->nropublicacion = $request->nropublicacion;
        $clasificacion->lugarpublicacion = $request->lugarpublicacion;
        $clasificacion->updated_at = now();

        $clasificacion->save();

        return redirect()->route('clasificacion.index')
                        ->with('info','El Tipoproducto fue actualizado');


   }

   public function destroy ($id){
       $clasificacion = Clasificacion::find($id);
       $clasificacion->delete();
       return back ()->with('info', 'El Tipoproducto fue eliminado');
    }

    public function obtener(Request $request){
        $clasificacions = Clasificacion::orderby('nombre', 'ASC')->get();
        if ($request->ajax()){
            //dd(view('ventas.aside.productos', compact('$precioproductos'))->render());
            return view('ventas.aside.libros', compact('clasificaciones'))->render();

        } else {
            return "Obtener libros";
        }
    }
}
