<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $all = Post::all();
        $highlightPost = Post::orderBy('ratingcount', 'desc')->take(1)->get()[0];
        $latestPosts = Post::latest()->take(4)->get();

        return view('home', [
            'allPosts' => $all,
            'highlightPost' => $highlightPost,
            'latestPosts' => $latestPosts
        ]);
    }

    public function show($id){
        $post = Post::find($id);
        return view('detail', [
            'post' => $post
        ]);
    }
}
