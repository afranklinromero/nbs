<?php

namespace App\Http\Controllers;

use App\Modelos\Concurso;
use App\Modelos\Configuracion;
use App\Modelos\Clasificacion;
use App\Modelos\Detalleparticipacion;
use App\Modelos\Participacion;
use App\Modelos\Pregunta;
use App\Modelos\Respuesta;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

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
        $participacion->user_id = Auth::user()->id;

        $participacion->tiempo = intdiv($request->tiempo, 60). ':'. ($request->tiempo % 60);
        $participacion->correctas = 0;
        $participacion->incorrectas = 0;
        $participacion->puntos = 0;


        foreach ($request->respuestas as $i => $respuesta) {
            $detalleparticipacion = new Detalleparticipacion();
            $detalleparticipacion->participacion_id = 0;
            $pregunta_id = $request->preguntas[$i];
            $respuesta_id = $request->respuestas[$i];
            if ($respuesta_id > 0){
                $detalleparticipacion->pregunta_id = $pregunta_id;
                $respuesta = Respuesta::find($respuesta_id);
                $detalleparticipacion->respuesta_id = $respuesta->id;
                $detalleparticipacion->escorrecto = $respuesta->escorrecta;
            } else {
                $detalleparticipacion->pregunta_id = 1;
                $detalleparticipacion->respuesta_id = 1;
                $detalleparticipacion->escorrecto = 0;
            }



            if ($detalleparticipacion->escorrecto == 1){
                $participacion->correctas = $participacion->correctas + 1;
            } else {
                $participacion->incorrectas = $participacion->incorrectas + 1;
            }

            $detalleparticipaciones[] = $detalleparticipacion;
        }

        //dd($detalleparticipaciones);


        $participacion->puntos = $concurso->configuracion->puntosporrespuesta * $participacion->correctas;
        /*
        if ($concurso->configuracion->limiterespuestaserroneas <= $preguntaserroneas){

        } else {
            $participacion->puntos = 0;
        }

        */
        //**GUARDAR */
        //dd($detalleparticipaciones);
        $participacion->save();
        foreach ($detalleparticipaciones as $key => $detalleparticipacion) {

            $detalleparticipacion->participacion_id = $participacion->id;
            //dd($detalleparticipacion);
            $detalleparticipacion->save();
        }

        $clasificacion = Clasificacion::where('user_id', $participacion->user_id)
                                    ->where('concurso_id', $participacion->concurso_id)
                                    ->where('estado', 1)->first();

        if (isset($clasificacion)){
            $clasificacion->puntos = $clasificacion->puntos + $participacion->puntos;
            $clasificacion->updated_at = now();
            $clasificacion->save();
        } else {
            $clasificacion = new Clasificacion();
            $clasificacion->concurso_id = $participacion->concurso_id;
            $clasificacion->user_id = $participacion->user_id;
            $clasificacion->puntos = $participacion->puntos;
            $clasificacion->save();
        }

        $clasificaciones = Clasificacion::where('concurso_id', $participacion->concurso_id)->where('estado', '1')->get();
        


        if ($request->ajax()){
            return response()->json(\view('concurso.aside.finjuego', \compact('participacion', 'clasificacion', 'clasificaciones'))->render());
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
