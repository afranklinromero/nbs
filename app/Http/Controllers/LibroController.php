<?php

namespace App\Http\Controllers;

use App\Mail\EnviarComentario;
use App\Modelos\Busqueda;
use App\Modelos\Libro;
use App\Modelos\Marcador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LibroController extends Controller
{
    //
    public function index(Request $request){

        $paginate = 100;
        $top = 20;
        
        $marcadores = Marcador::where('estado', '1');
        if (isset($request->titulo)){
            $marcadores = $marcadores->where('nombre', 'like', '%' . str_replace(' ', '%', $request->titulo) . '%');
            $titulos = explode(' ', $request->titulo);
            /*
            foreach ($titulos as $key => $titulo) {
                # code...
                if ($key==0)
                    $marcadores = $marcadores->where('nombre', 'like', '%' . $titulo . '%');
                else
                    $marcadores = $marcadores->orWhere('nombre', 'like', '%' . $titulo . '%');
            }
            */
        }
        
        $marcadores = $marcadores->paginate($paginate);





        /*
        $libros = Libro::where(function ($query) {
            $query->where('titulo', 'like', '%malaria%')
            foreach ($titulos as $key => $titulo) {
                # code...
                $query = $query->orWhere('titulo', 'like', '%diagnostico%');
            }
                    
        })->paginate($paginate);
        */

        $busquedas = Busqueda::where('estado', '1')->orderBy('frecuencia', 'desc')->take($top)->get();

        $mensaje=null;

        if ($request->ajax()){
            
            if(sizeof($marcadores->items()) > 0){
                $mensaje = "Se encontraron ". sizeof($marcadores->items()) . ' coincidencias';
                $busqueda = Busqueda::where('frase', $request->titulo)->first();
                if (isset($busqueda)){
                    $busqueda->frecuencia = $busqueda->frecuencia + 1;
                    $busqueda->updated_at = now();
                    $busqueda->save();
                } else {
                    $busqueda = new Busqueda();
                    $busqueda->frase = $request->titulo;
                    $busqueda->save();
                }
                $busquedas = Busqueda::where('estado', '1')->orderBy('frecuencia', 'desc')->take($top)->get();
            } else {
                $mensaje = "No se encontraron coincidencias!!!";
            }

            return view('libro.aside.index-datos',compact('marcadores', 'busquedas', 'mensaje'))->render();
        } else{

            return view('libro.index',compact('marcadores', 'busquedas', 'mensaje'));
        }
    }

    public function pagination(Request $request, $page){

        $libros = Libro::where('estado', '9')->paginate(5);
        if(isset($request->titulo) && ($request->titulo != "")){
            $titulo = str_replace(' ', '%', $request->titulo);
            $libros = Libro::where('titulo', 'like', '%'.$titulo.'%')->where('estado', '1')->orderBy('titulo', 'ASC')->paginate(5);
            //dd($libros->items());
        }
        $busquedas = Busqueda::where('estado', '1')->orderBy('frecuencia', 'desc')->take(10)->get();
        $mensaje=null;
        if ($request->ajax()){
            if(sizeof($libros->items()) > 0){
                $mensaje = "Se encontraron ". sizeof($libros->items()) . ' coincidencias';
                $busqueda = Busqueda::where('frase', $request->titulo)->first();
                if (isset($busqueda)){
                    $busqueda->frecuencia = $busqueda->frecuencia + 1;
                    $busqueda->updated_at = now();
                    $busqueda->save();
                } else {
                    $busqueda = new Busqueda();
                    $busqueda->frase = $request->titulo;
                    $busqueda->save();
                }
                $busquedas = Busqueda::where('estado', '1')->orderBy('frecuencia', 'desc')->take(10)->get();
            } else {
                $mensaje = "No se encontraron coincidencias!!!";
            }

            return view('libro.aside.index-datos-pagination',compact('libros', 'busquedas', 'mensaje'))->render();
        } else{

            return view('libro.index',compact('libros', 'busquedas', 'mensaje'));
        }

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
        $pagina = (isset($request->pagina)? $request->pagina : 1);
        $documentopdf = (isset($request->documentopdf)? $request->documentopdf : $libro->documentopdf);

        $marcadores = $libro->marcadores()->where('estado', '1')->where('nombre', 'like', '%'. (isset($request->nombre)? $request->nombre:'') .'%' )->paginate(5);

        if ($request->ajax()){
            return view('libro.aside.show-left-body', compact('libro', 'marcadores','documentopdf', 'pagina'))->render();
        }
        //$marcadores = Marcador::where('libro_id', $libro->id)->where('estado', '1')->paginate(10);
        return view('libro.show', compact('libro', 'marcadores', 'documentopdf', 'pagina'));
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

    public function download($id)
    {
        $libro = Libro::find($id);
        $pathToFile = "libros/".$libro->documentopdf;
        return response()->download($pathToFile);
    }

}
