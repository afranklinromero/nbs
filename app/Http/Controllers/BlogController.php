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
    protected $dirBlog = 'public/files/blog/';

    public function index(Request $request){
        //Auth::user()->authorizeRoles(['admin', 'user']);

        $blogs = Blog::orderBy('id', 'desc')->where('estado', '1');
        $titulo = $request->titulo;
        if (isset($request->titulo) && strlen(trim($request->titulo)) > 0)
            $blogs = $blogs->where('titulo','like', '%'.$request->titulo.'%');

        $blogs = $blogs->paginate(12);

        $publicidades = Publicidad::where('estado', 1)->where('lugar', 'like', '%blog%')->orderBy('id')->get();
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
            $blog->imagen = $blog->id . '.' . $fileimagen->getClientOriginalExtension();
            $blog->save();
            Storage::disk('local')->putFileAs($this->dirBlog . $blog->id, $fileimagen, $blog->imagen);
        }
        if (isset($filepdf)) {
            //$filepdf->move(public_path().'/img/blog/doc', $blog->id . '.' .$filepdf->getClientOriginalExtension());
            $blog->documentopdf = $blog->id . '.' . $filepdf->getClientOriginalExtension();
            $pdf_name = $blog->id + '.' . $filepdf->getClientOriginalExtension();
            Storage::disk('local')->putFileAs($this->dirBlog . $blog->id, $filepdf, $blog->documentopdf);
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
        $blog->fill($request->all());


        if (isset($request->imagen)){
            $fileimagen = $request->file('imagen');
            //$name = $fileimagen->getClientOriginalName();
            //$ext = $fileimagen->getClientOriginalExtension();
            $blog->imagen = $id . '.' . $fileimagen->getClientOriginalExtension();
            Storage::disk('local')->putFileAs($this->dirBlog . $blog->id, $fileimagen, $blog->imagen);
        }

        if (isset($request->documentopdf)){
            $filepdf = $request->file('documentopdf');
            $blog->documentopdf =  $id . $filepdf->getClientOriginalName();
            //$pdf->move(public_path().'/img/blog/doc/', $blog->id . '.' . $ext);
            Storage::disk('local')->putFileAs('public/files/blog/'.$blog->id, $filepdf, $blog->documentopdf);
        }

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
        //dd('destruir');
        if(!Auth::check()) return redirect()->route('libro.index');
        if (!Auth::user()->hasRole('admin')) return redirect()->route('libro.index');

        Storage::deleteDirectory($this->dirBlog . $id);

        $blog = Blog::find($id);
        /*
        $blog->estado = 0;
        $blog->updated_at = now();
        */
        $blog->delete();
        return redirect()->route('blog.index')->with('info', 'Articulo dado de baja!');
    }

    public function download($id)
    {
        dd('descargando...');
        $blog = Blog::find($id);
        //dd($blog);
        //$pathToFile = "img/blog/doc/".$blog->id.'.pdf';
        //return response()->download($pathToFile);

        $pathToFile = "storage/files/blog/".$blog->id . '/'. $blog->id .'.pdf';
        dd($pathToFile);
        return response()->download($pathToFile);/*, 'documentopdf.pdf', [
            'Content-Type' => 'pdf',
            'X-Header-One' => 'Header Value',
            'X-Header-Two' => 'Header Value',
        ]);
        */
    }
}
