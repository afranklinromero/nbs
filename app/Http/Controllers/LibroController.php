<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    //
    public function index(){
        $libros=Libro::orderBy('titulo')->paginate(10);
        return view('libro.index',compact('libros'));
    }

    public function show ($id){
        $libro = Libro::find($id);
        return view('libro.show', compact('libro'));
    }

    public function create(){
        return view('libro.create');
    }

    public function store (Request $request){

        $libro = new Libro();
        $libro->nombre = $request->nombre;
        $libro->created_at = now();
        $libro->updated_at = now();
        $libro->estado = 1;
        $libro->save();

        return redirect()->route('libro.index')
                        ->with('info','El Tipoproducto fue guardado');


   }


    public function edit($id){
        $libro = Libro::find($id);
        return view('libro.edit', compact('tipoproducto'));
    }

    public function update (Request $request, $id){

        $libro = Libro::find($id);

        $libro->nombre = $request->nombre;
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
