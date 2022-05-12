<?php

namespace App\Http\Controllers;

use App\Http\Requests\SugerenciaRequest;
use App\Mail\Mailsugerencia;
use App\Modelos\Respuestasugerencia;
use App\Modelos\Sugerencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class SugerenciaController extends Controller
{
    //
    public function index(Request $request){
        if (!Auth::check()) return redirect()->route('libro.index');

        //Auth::user()->authorizeRoles(['admin']);

        if (!Auth::user()->hasRole('admin')) return redirect()->route('libro.index');


        $sugerencias = Sugerencia::where('estado', '<>','0')->orderby('id', 'DESC')->paginate(20);
        $request->session()->put('info', 'Listado de sugerencias desde la mas reciente a la mas antigua');

        if ($request->ajax())
            return view('sugerencia.aside.index', compact('sugerencias'))
            ->render();

        return view('sugerencia.index', compact('sugerencias'));

    }

    public function show(Request $request, $id){
        if (!Auth::check()) return redirect()->route('libro.index');

        Auth::user()->authorizeRoles(['admin']);

        $sugerencia = Sugerencia::find($id);
        $respuestasugerencias = RespuestaSugerencia::where('sugerencia_id', $sugerencia->id)->where('estado', 1)->get();
        //dd($respuestasugerencias);
        if ($request->ajax())
            return view('sugerencia.aside.show', compact('sugerencia', 'respuestasugerencias'))->render();
        return view('sugerencia.show', compact('sugerencia', 'respuestasugerencias'));
    }

    public function showme($id){
        if (!Auth::check()) return redirect()->route('libro.index');
        Auth::user()->authorizeRoles(['admin']);
        $sugerencia = Sugerencia::find($id);


        $sugerencia->estado=2;
        $sugerencia->save();

        return redirect()->route('sugerencia.show', $sugerencia->id);
    }

    public function create(Request $request)
    {
        if ($request->ajax())
            return view('sugerencia.aside.create')->render();
        return view('sugerencia.create');
    }

    public function update(Request $request, $id)
    {
        if (!Auth::check()) return redirect()->route('libro.index');
        Auth::user()->authorizeRoles(['admin']);
        if (Auth::user()->hasRole('admin')){
            $sugerencia = Sugerencia::find($id);
            $sugerencia->estado = 0;
            $sugerencia->save();
            $sugerencias = Sugerencia::orderby('id', 'DESC')->where('estado', 1)->paginate(5);
            return redirect()->route('sugerencia.index');
        }
        else return redirect()->route('sugerencia.create');
    }

    public function store(sugerenciaRequest $request)
    {
            $sugerencia = new sugerencia($request->all());
            //$sugerencia->user_id = (Auth::check()? Auth::user()->id : 2); //3 user id invitado
            //dd($sugerencia);

            $sugerencia->save();
            //$request->session()->put('info', 'Sugerencia enviada!!');
            //Mail::to('info@sofcruz.com')->queue(new Mailsugerencia($sugerencia));

            if ($request->ajax()){
                return view('sugerencia.aside.create')->render();
            }

            return  redirect()->route('sugerencia.create')->with('info', 'Hemos recibido su mensaje, muchas gracias por sus sugerencias!');
    }

    public function destroy(Request $request, $id){
        //dd('destruir');
        if(!Auth::check()) return redirect()->route('libro.index');
        if (!Auth::user()->hasRole('admin')) return redirect()->route('libro.index');


        $sugerencia = Sugerencia::find($id);
        /*
        $blog->estado = 0;
        $blog->updated_at = now();
        */
        $sugerencia->delete();
        return redirect()->route('sugerencia.index')->with('info', 'Registro dado de baja!');
    }

}
