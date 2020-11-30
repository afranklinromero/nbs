<?php

namespace App\Http\Controllers;

use App\Modelos\Libro;
use App\Modelos\Marcador;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    //
    public function index(Request $request){
        $libros = Libro::where('estado', '9')->paginate(5);
        if(isset($request->titulo) && ($request->titulo != "")){
            $libros = Libro::where('titulo', 'like', '%'.$request->titulo.'%')->where('estado', '1')->orderBy('titulo', 'ASC')->paginate(5);
            //dd($libros->items());
        }

        if ($request->ajax()){ 
            return view('libro.aside.index-datos',compact('libros'))->render();
        } else
            return view('libro.index',compact('libros'));

    }

    public function buscar(Request $request){
        //dd($request->dato);
        $dato = $request->dato;
        $libros=Libro::where('titulo', 'like', '%'.$dato.'%')->orderBy('id', 'DESC')->paginate(10);
        return view('libro.index',compact('libros', 'dato'));
    }

    public function show (Request $request, $id){
        $libro = Libro::find($id);
        //if(isset($request->nombre)) dd($request->nombre);
        $marcadores = $libro->marcadores()->where('estado', '1')->where('nombre', 'like', '%'. (isset($request->nombre)? $request->nombre:'') .'%' )->paginate(5);

        if ($request->ajax()){
            return view('libro.aside.show-left-body', compact('libro', 'marcadores'))->render();
        }
        //$marcadores = Marcador::where('libro_id', $libro->id)->where('estado', '1')->paginate(10);
        return view('libro.show', compact('libro', 'marcadores'));
    }


    public function create(){
        return view('libro.create');
    }

    public function store (Request $request){

        $libro = new Libro();
        $libro->titulo = $request->titulo;
        $libro->fecha = $request->fecha;
        $libro->tapa = $request->tapa;
        $libro->documentopdf = $request->documentopdf;
        $libro->edicion = $request->edicion;
        $libro->serie = $request->serie;
        $libro->nropublicacion = $request->nropublicacion;
        $libro->lugarpublicacion = $request->lugarpublicacion;
        $libro->created_at = now();
        $libro->updated_at = now();
        $libro->estado = 1;
        $libro->save();

        return redirect()->route('libro.index')
                        ->with('info','El Tipoproducto fue guardado');


   }


    public function edit($id){
        $libro = Libro::find($id);
        return view('libro.edit', compact('libro'));
    }

    public function update (Request $request, $id){

        $libro = Libro::find($id);

        $libro->titulo = $request->titulo;
        $libro->fecha = $request->fecha;
        $libro->tapa = $request->tapa;
        $libro->documentopdf = $request->documentopdf;
        $libro->edicion = $request->edicion;
        $libro->serie = $request->serie;
        $libro->nropublicacion = $request->nropublicacion;
        $libro->lugarpublicacion = $request->lugarpublicacion;
        $libro->updated_at = now();

        $libro->save();

        return redirect()->route('libro.index')
                        ->with('info','El Tipoproducto fue actualizado');


   }

   public function destroy ($id){
       $libro = Libro::find($id);
       $libro->delete();
       return back ()->with('info', 'El Tipoproducto fue eliminado');
    }

    public function obtener(Request $request){
        $libros = Libro::orderby('nombre', 'ASC')->get();
        if ($request->ajax()){
            //dd(view('ventas.aside.productos', compact('$precioproductos'))->render());
            return view('ventas.aside.libros', compact('libros'))->render();

        } else {
            return "Obtener libros";
        }
    }
}
