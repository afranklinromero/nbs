<?php

namespace App\Http\Controllers;

use App\Modelos\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //
    public function index(Request $request){
        $blogs = Blog::orderBy('id', 'desc')->paginate(10);
        return view('blog.index', compact('blogs'));
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

        

        
        
        //indicamos que queremos guardar un nuevo archivo en el disco local
        //Storage::put($nombre, $file);

        $blog->save();

        $request->file('multimedia')->storeAs('public/img/blog/', 'articulo' . $blog->id . '.png');
        
        if ($request->ajax())
            return redirect()->route('blog.show', $blog->id);

        return redirect()->route('blog.show', $blog->id);
    }
}