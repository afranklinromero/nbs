<?php

namespace App\Http\Controllers;

use App\Modelos\Libro;
use Illuminate\Http\Request;
use App\Modelos\Marcador;

class MarcadorController extends Controller
{
    //
    public function index(){
        $marcadores=Marcador::orderBy('numero', 'ASC')->paginate(10);
        return view('libro.aside.show-left-body',compact('marcadores'));
    }

    public function buscar(Request $request){

        //dd($request->libro_id. ' ' . $request->nombre);
        $libro = Libro::find($request->libro_id);
        $marcadores=Marcador::where('libro_id',  $request->libro_id)
                    ->where('nombre', 'like', '%'.$request->nombre.'%')
                    ->where('estado', '1')
                    ->orderBy('numero', 'ASC')->paginate(5);

        if ($request->ajax()){
            return view('libro.aside.show-left-body',compact('libro', 'marcadores'))->render();
        }
    }

    public function buscar2(Request $request){
        //dd($request->libro_id);
        //dd($libro_id. ' ' . $nombre);
        $marcadores=Marcador::where('libro_id', '=', $request->libro_id)->where('nombre', 'like', '%'. $request->nombre .'%')->orderBy('numero', 'DESC')->paginate(4);
        return view('marcador.index',compact('marcadores'));
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

    public function irapagina(Request $request){
        //$libro = Libro::find($request->libro_id);
        //dd($request->documentopdf);

        if ($request->ajax()){
            //<embed class="embed" src="{{asset('libros') }}/MALARIA.pdf#page=4" type="application/pdf" width="100%" height="100%" />
            return "<embed src='". asset('libros') . "/".$request->documentopdf."#page=".$request->pagina."' type='application/pdf' width='100%' height='100%'/>";
            //return 'okok';
        } else {
            return 'procesando...';
        }

    }
}
