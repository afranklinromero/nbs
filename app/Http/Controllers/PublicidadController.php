<?php

namespace App\Http\Controllers;

use App\Modelos\Publicidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class publicidadController extends Controller
{
    //

    public function __construct(Request $request){
        $this->middleware('auth');
    }

    public function index(Request $request){
        Auth::user()->authorizeRoles(['admin']);

        $publicidades = Publicidad::orderBy('id', 'desc')->where('estado', '1');
        $titulo = $request->titulo;
        if (isset($request->titulo) && strlen(trim($request->titulo)) > 0)
            $publicidades = $publicidades->where('titulo','like', '%'.$request->titulo.'%');

        $publicidades = $publicidades->paginate(12);

        //$publicidades = Publicidad::orderBy('id', 'desc')->paginate(12);
        return view('publicidad.index', compact('publicidades'));
    }

    public function show(Request $request, $id){
        Auth::user()->authorizeRoles(['admin']);

        $publicidad = publicidad::find($id);
        return view('publicidad.show', compact('publicidad'));
    }

    public function create(Request $request){
        Auth::user()->authorizeRoles(['admin']);

        return view('publicidad.create');
    }

    public function store(Request $request){
        Auth::user()->authorizeRoles(['admin']);

        $publicidad = new publicidad($request->all());
        $publicidad->lugar = implode(',',$publicidad->lugar);
        //dd($publicidad);

        $publicidad->estado = 1;
        $fileimagen = $request->file('imagen');
        $name = $fileimagen->getClientOriginalName();
        $publicidad->imagen = $name;
        $publicidad->ext = $fileimagen->getClientOriginalExtension();

        $publicidad->save();
        //$image->move(public_path().'/img/publicidad/', $publicidad->id . '.png');
        Storage::disk('local')->putFileAs('public/files/publicidad/'.$publicidad->id, $fileimagen, $publicidad->id . '.' . $fileimagen->getClientOriginalExtension());
        //dd($image);
        //Storage::put('/public/publicidad/'.$publicidad->id . '.png', \File::get);

        if ($request->ajax())
            return redirect()->route('publicidad.show', $publicidad->id);

        return redirect()->route('publicidad.show', $publicidad->id);
    }

    public function edit(Request $request, $id){
        Auth::user()->authorizeRoles(['admin']);

        $publicidad = publicidad::find($id);
        return view('publicidad.edit', compact('publicidad'));
    }

    public function update(Request $request, $id){
        Auth::user()->authorizeRoles(['admin']);

        $publicidad = publicidad::find($id);
        $tipo = $request->tipo;



        if (isset($tipo) && $tipo == 'baja'){
            $publicidad->estado = 0;
            $publicidad->updated_at = now();
            $publicidad->save();
            return redirect()->route('publicidad.index');
        } else if (isset($tipo) && $tipo == 'alta'){
            $publicidad->estado = 1;
            $publicidad->updated_at = now();
            $publicidad->save();
            return redirect()->route('publicidad.index');
        } else{ //ACTUALIZAR
            $publicidad->lugar = implode(',',$request->lugar);
            $publicidad->titulo = $request->titulo;
            if (isset($request->imagen)){
                $fileimagen = $request->file('imagen');
                $name = $fileimagen->getClientOriginalName();
                $publicidad->imagen = $name;
                $publicidad->ext = $fileimagen->getClientOriginalExtension();
                //$image->move(public_path().'/img/publicidad/', $publicidad->id . '.png');
                Storage::disk('local')->putFileAs('public/files/publicidad/'.$publicidad->id, $fileimagen, $publicidad->id . '.' . $fileimagen->getClientOriginalExtension());
            }
            $publicidad->contenido = $request->contenido;
            $publicidad->link = $request->link;
            $publicidad->fechaini = $request->fechaini;
            $publicidad->fechafin = $request->fechafin;
            $publicidad->updated_at = now();
            $publicidad->save();
            return redirect()->route('publicidad.show', $publicidad->id);
        }

    }

    public function destroy(Request $request, $id){
        //dd('destruir');
        if(!Auth::check()) return redirect()->route('libro.index');
        if (!Auth::user()->hasRole('admin')) return redirect()->route('libro.index');

        $publicidad = Publicidad::find($id);
        /*
        $blog->estado = 0;
        $blog->updated_at = now();
        */
        $publicidad->delete();
        return redirect()->route('publicidad.index')->with('info', 'Publicidad eliminada!');
    }
}
