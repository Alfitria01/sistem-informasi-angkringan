<?php

namespace App\Http\Controllers;

use App\Models\Post; // Asumsikan Anda memiliki model Post

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}