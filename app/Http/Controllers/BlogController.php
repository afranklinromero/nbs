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
}
