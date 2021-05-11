<?php

namespace App\Http\Controllers;

use App\Modelos\Blog;
use App\Modelos\Publicidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //
    public function index(Request $request){
        $blogs = Blog::orderBy('id', 'desc')->paginate(12);
        $publicidades = Publicidad::all();
        return view('blog.index', compact('blogs', 'publicidades'));
    }

    public function show(Request $request, $id){
        $blog = Blog::find($id);
        return view('blog.show', compact('blog'));
    }

    public function create(Request $request){
        return view('blog.create');
    }

    public function store(Request $request){
        $blog = new Blog($request->all());

        $blog->estado = 1;

        $blog->save();


        //$request->file('multimedia')->storeAs('public/blog/', $blog->id . '.png');
        $image = $request->file('multimedia');
        $imagen = $image->getClientOriginalName();
        $formato = $image->getClientOriginalExtension();
        $image->move(public_path().'/img/blog/', $blog->id . '.png');
        //dd($image);
        //Storage::put('/public/blog/'.$blog->id . '.png', \File::get);

        if ($request->ajax())
            return redirect()->route('blog.show', $blog->id);

        return redirect()->route('blog.show', $blog->id);
    }

    public function edit(Request $request, $id){
        $blog = Blog::find($id);
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, $id){
        $blog = Blog::find($id);

        $blog->titulo = $request->titulo;
        if (isset($request->multimedia)){
            $image = $request->file('multimedia');
            $imagen = $image->getClientOriginalName();
            $formato = $image->getClientOriginalExtension();
            $image->move(public_path().'/img/blog/', $blog->id . '.png');
        }
        $blog->contenido = $request->contenido;
        $blog->autor = $request->autor;
        $blog->referencia = $request->referencia;

        //$blog->estado = 1;

        $blog->save();


        if ($request->ajax())
            return redirect()->route('blog.show', $blog->id);

        return redirect()->route('blog.show', $blog->id);
    }
}
