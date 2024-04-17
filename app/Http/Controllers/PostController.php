<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function blog()
    {
        $posts = Post::all();
        return view('blog', compact("posts"));
    }

    // public function admin()
    // {
    //     $posts = Post::all();
    //     return view('admin', compact("posts"));
    // }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->save();
    }
}
