<?php

namespace App\Http\Controllers;

use App\Modelos\Blog;
use Illuminate\Http\Request;

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
}
