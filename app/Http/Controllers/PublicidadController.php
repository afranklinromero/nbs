<?php

namespace App\Http\Controllers;

use App\Modelos\Publicidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class publicidadController extends Controller
{
    //

    public function __construct(Request $request){
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        Auth::user()->authorizeRoles(['admin']);

        $publicidades = Publicidad::orderBy('id', 'desc');//->where('estado', '1');
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

        $publicidad->estado = 1;

        $publicidad->save();


        //$request->file('multimedia')->storeAs('public/publicidad/', $publicidad->id . '.png');
        $image = $request->file('multimedia');
        $imagen = $image->getClientOriginalName();
        $formato = $image->getClientOriginalExtension();
        $image->move(public_path().'/img/publicidad/', $publicidad->id . '.png');
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
        //dd($tipo);
        if (isset($tipo) && $tipo == 'baja'){
            $publicidad->estado = 0;
            $publicidad->updated_at = now();
        } else if (isset($tipo) && $tipo == 'alta'){
            $publicidad->estado = 1;
            $publicidad->updated_at = now();
        } else{
            $publicidad->titulo = $request->titulo;
            if (isset($request->multimedia)){
                $image = $request->file('multimedia');
                $imagen = $image->getClientOriginalName();
                $formato = $image->getClientOriginalExtension();
                $image->move(public_path().'/img/publicidad/', $publicidad->id . '.png');
            }
            $publicidad->contenido = $request->contenido;
            $publicidad->link = $request->link;
            $publicidad->fechaini = $request->fechaini;
            $publicidad->fechafin = $request->fechafin;
            $publicidad->updated_at = now();
        }

        //$publicidad->estado = 1;

        $publicidad->save();


        //if ($request->ajax())
          //  return redirect()->route('publicidad.show', $publicidad->id);

        return redirect()->route('publicidad.index');
    }
}
