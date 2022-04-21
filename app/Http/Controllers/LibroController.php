<?php

namespace App\Http\Controllers;

use App\Mail\EnviarComentario;
use App\Modelos\Busqueda;
use App\Modelos\Libro;
use App\Modelos\Publicidad;
use App\Modelos\Marcador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\LibroRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LibroController extends Controller
{
    //
    public function index(Request $request){

        $paginate = 100;
        $top = 20;
        $titulos[] = "";
        $libros = Libro::where('estado', '1');
        if (isset($request->titulo)){

            $titulos = preg_split("/[\s,]+/", trim($request->titulo));
            $tituloinvertido = implode(" ", array_reverse($titulos));

            $libros = $libros->where('titulo', 'like', '%' . str_replace(' ', '%', $request->titulo) . '%')
                                    ->orWhere('titulo', 'like', '%' . str_replace(' ', '%', $tituloinvertido) . '%');


            foreach ($titulos as $key => $titulo) {
                # code...
                if (!in_array($titulo, ['de', 'los', 'en'])){
                    $libros2 = Libro::where('estado', 1)->where('titulo', 'like', '%' . $titulo . '%');
                    $libros = $libros->union($libros2);
                }
            }

        } else {
            $libros = Libro::where('estado', '1')
                            ->orderBy('orden', 'ASC');
        }

        $libros = $libros->paginate($paginate);

        $busquedas = Busqueda::where('estado', '1')->orderBy('frecuencia', 'desc')->take($top)->get();

        $mensaje=null;

        $publicidades = Publicidad::where('estado', 1)->where('lugar','like', '%libro%')->orderBy('id')->get();

        if ($request->ajax()){

            if(sizeof($libros->items()) > 0){
                $mensaje = "Se encontraron ". sizeof($libros->items()) . ' coincidencias';
                if (isset($request->titulo)){
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
                }

            } else {
                $mensaje = "No se encontraron coincidencias!!!";
            }

            return view('libro.aside.index-datos',compact('libros', 'publicidades', 'busquedas', 'mensaje', 'titulos'))->render();
        } else{
            return view('libro.index',compact('libros', 'publicidades', 'busquedas', 'mensaje', 'titulos'));
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
        if(!Auth::check()) return redirect()->route('libro.index');

        Auth::user()->authorizeRoles(['admin']);
        return view('libro.create');

    }

    public function store (LibroRequest $request){

        //dd($request);
        //dd('???');
        if(!Auth::check()) return redirect()->route('libro.index');

        Auth::user()->authorizeRoles(['admin']);


        $libro = new Libro($request->all());
        //dd($libro);
        $libro->orden = $max = Libro::max('id') + 1;
        //dd($libro);
        $fileimagen = $request->file('tapa');
        if (isset($fileimagen)){
            $libro->tapa = $fileimagen->getClientOriginalName();
            $libro->ext = $fileimagen->getClientOriginalExtension();
        } else {
            $libro->imagen = null;
        }

        $filepdf = $request->file('documentopdf');
        if (isset($filepdf)) {
            //$libro->nombredocumentopdf = $filepdf->getClientOriginalName();
            $libro->documentopdf = $libro->orden . '.pdf';
        }


        //dd($libro);
        $libro->save();
        $libro->tapa = $libro->id . '.' .$libro->ext;
        $libro->documentopdf = $libro->id . '.pdf';
        $libro->orden = $libro->id;

        $libro->save();

        if (isset($fileimagen)) {
            Storage::disk('local')->putFileAs('public/files/libros/tapas', $fileimagen, $libro->tapa);
            //$fileimagen->move(public_path().'/tapas', $libro->id . '.' . $fileimagen->getClientOriginalExtension());
        }
        if (isset($filepdf)) {
            Storage::disk('local')->putFileAs('public/files/libros/pdfs', $filepdf, $libro->documentopdf);
            //$filepdf->move(public_path().'/libros', $libro->id . '.' .$filepdf->getClientOriginalExtension());
        }

        //$libro->documentopdf = $libro->id . '.pdf';

        //$libro->save();

        //dd('???');

        return redirect()->route('libro.show', $libro->id)
                        ->with('info','Libro guardado con exito');


   }


    public function edit($id){
        if(!Auth::check()) return redirect()->route('libro.index');
        Auth::user()->authorizeRoles(['admin']);

        $libro = Libro::find($id);
        return view('libro.edit', compact('libro'));
    }

    public function update (LibroRequest $request, $id){
        if(!Auth::check()) return redirect()->route('libro.index');
        Auth::user()->authorizeRoles(['admin']);

        $libro = Libro::find($id);

        $libro->titulo = $request->titulo;
        $libro->fecha = $request->fecha;
        $libro->edicion = $request->edicion;
        $libro->serie = $request->serie;
        $libro->nropublicacion = $request->nropublicacion;
        $libro->lugarpublicacion = $request->lugarpublicacion;

        $fileimagen = $request->file('tapa');
        if (isset($fileimagen)){
            $libro->tapa = $fileimagen->getClientOriginalName();
            $libro->ext = $fileimagen->getClientOriginalExtension();
        } else {
            //$libro->imagen = null;
        }

        $filepdf = $request->file('documentopdf');
        if (isset($filepdf)) $libro->documentopdf = $filepdf->getClientOriginalName(); //else $libro->documentopdf = null;

        if (isset($fileimagen)){
            $nombre = $libro->id . '.' . $fileimagen->getClientOriginalExtension();
            $libro->tapa = $nombre;
            $fileimagen->move(public_path().'/tapas', $nombre);
        }

        if (isset($filepdf)) {
            //$libro->titulo = $fileimagen->getClientOriginalExtension();
            $nombre = $libro->id . '.' . $filepdf->getClientOriginalExtension();
            $libro->documentopdf = $nombre;
            $filepdf->move(public_path().'/libros', $nombre);
        }


        $libro->updated_at = now();

        $libro->save();

        return redirect()->route('libro.show', $libro->id)
                        ->with('info','Libro actualizado');


   }

   public function destroy ($id){
        Auth::user()->authorizeRoles(['admin']);

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

    public function download($documentopdf, $titulo)
    {
        //$libro = Libro::find($id);
        $pathToFile = "storage/files/libros/pdfs/".$documentopdf;
        return response()->download($pathToFile, $titulo, [
            'Content-Type' => 'pdf',
            'X-Header-One' => 'Header Value',
            'X-Header-Two' => 'Header Value',
        ]);
    }

    public function ayuda()
    {
        return view('libro.ayuda');
    }

}
