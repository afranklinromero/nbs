<?php

namespace App\Http\Controllers;

use App\Modelos\Concurso;
use App\Modelos\Pregunta;
use Illuminate\Http\Request;

class ConcursoController extends Controller
{
    //
    public $n = 10;

    public function index(){
        $concursos=Concurso::orderBy('id', 'DESC')->paginate(10);
        return view('concurso.index',compact('concursos'));
    }

    public function buscar(Request $request){
        //dd($request->dato);
        $dato = $request->dato;
        $concursos=Concurso::where('titulo', 'like', '%'.$dato.'%')->orderBy('id', 'DESC')->paginate(10);
        return view('concurso.index',compact('concursos', 'dato'));
    }

    public function show ($id){
        $clasificacion = Concurso::find($id);
        return view('concurso.show', compact('concurso'));
    }

    public function juegos(Request $request){
        $concursos = Concurso::where('estado', '1')->orderBy('id', 'DESC')->paginate(10);
        return view('concurso.juegos', compact('concursos'));
    }

    public function jugar(Request $request, $concurso_id){
        $n = $this->n;
        $index = 1;
        $preguntas = Pregunta::orderByRaw('rand()')->take(10)->get();
        return view('concurso.jugar', compact('preguntas', 'index', 'n', 'concurso_id'));
    }

    public function siguiente(Request $request, $index, $pregunta_id){
        $n = $this->n;
        if ($index <10){
            do {
                $pregunta = Pregunta::orderByRaw('rand()')->take(1)->get()->first();
            }
            while($pregunta_id == $pregunta->id);

            $index++;
            if ($request->ajax()){
                return response()->json(\view('concurso.aside.pregunta', \compact('index', 'pregunta'))->render());
            }
        } else {
            return 'endgame';
        }
    }

    public function create(){
        return view('concurso.create');
    }

    public function store (Request $request){

        $clasificacion = new Concurso();
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

        return redirect()->route('concurso.index')
                        ->with('info','El Tipoproducto fue guardado');


   }


    public function edit($id){
        $clasificacion = Concurso::find($id);
        return view('concurso.edit', compact('concurso'));
    }

    public function update (Request $request, $id){

        $clasificacion = Concurso::find($id);

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

        return redirect()->route('concurso.index')
                        ->with('info','El Tipoproducto fue actualizado');


   }

   public function destroy ($id){
       $clasificacion = Concurso::find($id);
       $clasificacion->delete();
       return back ()->with('info', 'El Tipoproducto fue eliminado');
    }

    public function obtener(Request $request){
        $clasificacions = Concurso::orderby('nombre', 'ASC')->get();
        if ($request->ajax()){
            //dd(view('ventas.aside.productos', compact('$precioproductos'))->render());
            return view('ventas.aside.libros', compact('concursos'))->render();

        } else {
            return "Obtener libros";
        }
    }
}