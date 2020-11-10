<?php

namespace App\Http\Controllers;

use App\Modelos\Concurso;
use App\Modelos\Configuracion;
use App\Modelos\Detalleparticipacion;
use App\Modelos\Participacion;
use App\Modelos\Pregunta;
use App\Modelos\Respuesta;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ParticipacionController extends Controller
{
    //
    public function index(){
        $participaciones=Participacion::orderBy('id', 'DESC')->paginate(10);
        return view('concurso.index',compact('participacion'));
    }

    public function buscar(Request $request){
        //dd($request->dato);
        $dato = $request->dato;
        $participacions=Participacion::where('titulo', 'like', '%'.$dato.'%')->orderBy('id', 'DESC')->paginate(10);
        return view('concurso.index',compact('participacion', 'dato'));
    }

    public function show ($id){
        $participacion = Participacion::find($id);
        return view('concurso.show', compact('concurso'));
    }

    public function create(){
        return view('concurso.create');
    }

    public function store (Request $request){

        $participacion = new Participacion();
        $concurso = Concurso::find($request->concurso_id);

        $participacion->concurso_id = $concurso->id;
        $participacion->user_id = 1;

        $participacion->respuestascorrectas = 0;
        $participacion->puntos = 0;


        foreach ($request->respuestas as $key => $respuesta) {
            $detalleparticipacion = new Detalleparticipacion();
            $detalleparticipacion->participacion_id = 0;
            $detalleparticipacion->pregunta_id = $request->preguntas[$key];
            $detalleparticipacion->respuesta_id = $request->respuestas[$key];
            $respuesta = Respuesta::find($detalleparticipacion->respuesta_id);
            $detalleparticipacion->escorrecto = $respuesta->escorrecto;

            if ($detalleparticipacion->escorrecto == 1){
                $participacion->respuestascorrectas++;
            }

            $detalleparticipaciones[] = $detalleparticipacion;
        }

        $preguntaserroneas = $concurso->configuracion->nropreguntas - $participacion->respuestascorrectas;

        if ($concurso->configuracion->limiterespuestaserroneas <= $preguntaserroneas){
            $participacion->puntos = $concurso->configuracion->puntosporrespuesta * $participacion->respuestascorrectas;
        } else {
            $participacion->puntos = 0;
        }

        //**GUARDAR */
        $participacion->save();
        foreach ($detalleparticipaciones as $key => $detalleparticipacion) {
            $detalleparticipacion->participacion_id = $participacion->id;
            //dd($detalleparticipacion);
            $detalleparticipacion->save();
        }

        
        if ($request->ajax()){
            return 'Gracias por su participacion id:'  . $participacion->id . ' Su puntuacion es: ' . $participacion->puntos;
        }
        return redirect()->route('concurso.index')
                        ->with('info','participacion guardada');
   }


    public function edit($id){
        $participacion = Participacion::find($id);
        return view('concurso.edit', compact('concurso'));
    }

    public function update (Request $request, $id){

        $participacion = Participacion::find($id);

        $participacion->titulo = $request->titulo;
        $participacion->fecha = $request->fecha;
        $participacion->tapa = $request->tapa;
        $participacion->documentopdf = $request->documentopdf;
        $participacion->edicion = $request->edicion;
        $participacion->serie = $request->serie;
        $participacion->nropublicacion = $request->nropublicacion;
        $participacion->lugarpublicacion = $request->lugarpublicacion;
        $participacion->updated_at = now();

        $participacion->save();

        return redirect()->route('concurso.index')
                        ->with('info','El Tipoproducto fue actualizado');


   }

   public function destroy ($id){
       $participacion = Participacion::find($id);
       $participacion->delete();
       return back ()->with('info', 'El Tipoproducto fue eliminado');
    }

    public function obtener(Request $request){
        $participacions = Participacion::orderby('nombre', 'ASC')->get();
        if ($request->ajax()){
            //dd(view('ventas.aside.productos', compact('$precioproductos'))->render());
            return view('ventas.aside.libros', compact('participacion'))->render();

        } else {
            return "Obtener libros";
        }
    }
}
