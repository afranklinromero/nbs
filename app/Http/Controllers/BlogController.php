<?php

namespace App\Http\Controllers;

use App\Modelos\Blog;
use App\Modelos\Publicidad;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    //
    public function index(Request $request){
        //Auth::user()->authorizeRoles(['admin', 'user']);

        $blogs = Blog::orderBy('id', 'desc')->where('estado', '1');
        $titulo = $request->titulo;
        if (isset($request->titulo) && strlen(trim($request->titulo)) > 0)
            $blogs = $blogs->where('titulo','like', '%'.$request->titulo.'%');

        $blogs = $blogs->paginate(12);

        $publicidades = Publicidad::where('estado', 1)->where('lugar', 'blog')->orderBy('id')->get();
        return view('blog.index', compact('blogs', 'publicidades', 'titulo'));
    }

    public function show(Request $request, $id){
        //Auth::user()->authorizeRoles(['admin', 'user']);

        $blog = Blog::find($id);
        return view('blog.show', compact('blog'));
    }

    public function create(Request $request){
        if(!Auth::check()) return redirect()->route('libro.index');

        
        Auth::user()->authorizeRoles(['admin']);
        return view('blog.create');

    }

    public function store(BlogRequest $request){
        if(!Auth::check()) return redirect()->route('libro.index');

        Auth::user()->authorizeRoles(['admin']);

        $blog = new Blog($request->all());
        $fileimagen = $request->file('imagen');
        if (isset($fileimagen)){
            $blog->imagen = $fileimagen->getClientOriginalName();
            $blog->ext = $fileimagen->getClientOriginalExtension();
        } else {
            $blog->imagen = null;
        }
        $filepdf = $request->file('documentopdf');
        if (isset($filepdf)) $blog->documentopdf = $filepdf->getClientOriginalName(); else $blog->documentopdf = null;

        $blog->save();

        if (isset($fileimagen)) {
            Storage::disk('local')->putFileAs('public/files/blog/'.$blog->id, $fileimagen, $blog->id . '.' . $fileimagen->getClientOriginalExtension());
            //$fileimagen->move(public_path().'/img/blog/', $blog->id . '.' . $fileimagen->getClientOriginalExtension());
        }
        if (isset($filepdf)) {
            //$filepdf->move(public_path().'/img/blog/doc', $blog->id . '.' .$filepdf->getClientOriginalExtension());
            Storage::disk('local')->putFileAs('public/files/blog/'.$blog->id, $filepdf, $blog->id . '.pdf');
        }

        //dd($image);
        //Storage::put('/public/blog/'.$blog->id . '.png', \File::get);

        if ($request->ajax())
            return redirect()->route('blog.show', $blog->id);

        return redirect()->route('blog.show', $blog->id)->with('info', 'Articulo creado.');
    }

    public function edit(Request $request, $id){
        if(!Auth::check()) return redirect()->route('libro.index');

        Auth::user()->authorizeRoles(['admin']);
        $blog = Blog::find($id);
        return view('blog.edit', compact('blog'));
    }

    public function update(BlogRequest $request, $id){
        if(!Auth::check()) return redirect()->route('libro.index');

        Auth::user()->authorizeRoles(['admin']);

        $blog = Blog::find($id);
        if (isset($request->tipo) && $request->tipo=='update'){
            $blog->titulo = $request->titulo;
            if (isset($request->imagen)){
                $fileimagen = $request->file('imagen');
                $name = $fileimagen->getClientOriginalName();
                $ext = $fileimagen->getClientOriginalExtension();
                //$image->move(public_path().'/img/blog/', $blog->id . '.'.$ext);
                Storage::disk('local')->putFileAs('public/files/blog/'.$blog->id, $fileimagen, $blog->id . '.' . $fileimagen->getClientOriginalExtension());
                $blog->imagen = $name;
                $blog->ext = $ext;
            }

            if (isset($request->documentopdf)){
                $pdf = $request->file('documentopdf');
                $documentopdf = $pdf->getClientOriginalName();
                $ext = $pdf->getClientOriginalExtension();
                //$pdf->move(public_path().'/img/blog/doc/', $blog->id . '.' . $ext);
                Storage::disk('local')->putFileAs('public/files/blog/'.$blog->id, $filepdf, $blog->id . '.pdf');
                $blog->documentopdf = $documentopdf;
            }

            $blog->youtube = $request->youtube;
            $blog->contenido = $request->contenido;
            $blog->autor = $request->autor;
            $blog->referencia = $request->referencia;
        } 
        elseif (isset($request->tipo) && $request->tipo=='alta') $blog->estado=1;
        elseif (isset($request->tipo) && $request->tipo=='baja') $blog->estado=0;

        $blog->updated_at = now();
        $blog->save();


        if ($request->ajax())
            return redirect()->route('blog.show', $blog->id);

        if ($request->tipo=='update')
            return redirect()->route('blog.show', $blog->id)->with('info', 'Articulo actualizado.');
        else
            return redirect()->route('blog.show', $blog->id)->with('info', 'Articulo actualizado.');
    }

    public function altabaja(Request $request, $id){
        if(!Auth::check()) return redirect()->route('libro.index');
        Auth::user()->authorizeRoles(['admin']);

        $blog = Blog::find($id);
        $blog->estado = $request->estado;
        $blog->save();
        $mensaje = ($blog->estado==1)? 'articulo dado de alta': ' articulo dado de baja';
        return redirect()->route('blog.show', $blog->id)->with('info',  $mensaje);
    }
    public function destroy(Request $request, $id){
        if(!Auth::check()) return redirect()->route('libro.index');
        Auth::user()->authorizeRoles(['admin']);

        $blog = Blog::find($id);
        $blog->estado = 0;
        $blog->updated_at = now();
        $blog->save();
        return redirect()->route('blog.index');
    }

    public function download($id)
    {
        $blog = Blog::find($id);
        $pathToFile = "img/blog/doc/".$blog->id.'.pdf';
        return response()->download($pathToFile);
    }
}
