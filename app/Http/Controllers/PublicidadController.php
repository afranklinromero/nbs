<?php

namespace App\Http\Controllers;

use App\Modelos\Publicidad;
use Illuminate\Http\Request;
use App\Http\Requests\PublicidadRequest;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;

class publicidadController extends Controller
{
    //
    protected $dirPublicidad = 'public/files/publicidad/';
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

    public function store(PublicidadRequest $request){
        Auth::user()->authorizeRoles(['admin']);

        $publicidad = new publicidad($request->all());
        $publicidad->fechaini = $publicidad->fechaini->format('y-m-d');
        $publicidad->fechafin = $publicidad->fechafin->format('y-m-d');

        if (isset($publicidad->lugar))
            $publicidad->lugar = implode(',', $publicidad->lugar);
        else
            $publicidad->lugar = '';
        //dd($publicidad);

        $publicidad->estado = 1;
        $fileimagen = $request->file('imagenfile');

        //$name = $fileimagen->getClientOriginalName();
        //$ext = $fileimagen->getClientOriginalExtension();

        $publicidad->save();
        $publicidad->imagen = $publicidad->id . '.' . $fileimagen->getClientOriginalExtension();
        $publicidad->save();
        //$image->move(public_path().'/img/publicidad/', $publicidad->id . '.png');
        Storage::disk('local')->putFileAs('public/files/publicidad/'.$publicidad->id, $fileimagen, $publicidad->imagen);
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

    public function update(PublicidadRequest $request, $id){
        Auth::user()->authorizeRoles(['admin']);

        $publicidad = publicidad::find($id);

        $publicidad->fill($request->all());
        $publicidad->fechaini = $publicidad->fechaini->format('y-m-d');
        $publicidad->fechafin = $publicidad->fechafin->format('y-m-d');
        $fileimagen = $request->file('imagenfile');
        //$name = $fileimagen->getClientOriginalName();
        //$ext = $fileimagen->getClientOriginalExtension();

        if (isset($fileimagen)){
            $publicidad->imagen = $publicidad->id . '.' . $fileimagen->getClientOriginalExtension();
            Storage::disk('local')->putFileAs('public/files/publicidad/'.$publicidad->id, $fileimagen, $publicidad->imagen);
        }
        $publicidad->save();


        return redirect()->route('publicidad.show', $publicidad->id);

        $publicidad->save();
        return redirect()->route('publicidad.show', $publicidad->id);

    }

    public function destroy(Request $request, $id){
        //dd('destruir');
        if(!Auth::check()) return redirect()->route('libro.index');
        if (!Auth::user()->hasRole('admin')) return redirect()->route('libro.index');

        $publicidad = Publicidad::find($id);
        Storage::deleteDirectory($this->dirPublicidad . $id);
        /*
        $blog->estado = 0;
        $blog->updated_at = now();
        */
        $publicidad->delete();
        return redirect()->route('publicidad.index')->with('info', 'Publicidad eliminada!');
    }

    public function inicio(){
        $now = now()->format('y-m-d');
        $publicidad = Publicidad::where('estado', '1')->where('titulo', 'PUBLICIDAD INICIO')->where('fechaini', '<=', $now)->where('fechafin', '>=', $now)->first();
        //dd($publicidad);
        return $publicidad;
    }
}
