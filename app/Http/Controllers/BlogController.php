<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('welcome', compact('blogs'));
    }

    public function show($id){
        $blog = Blog::find($id);
        return view('show', compact('blog'));
    }
}
