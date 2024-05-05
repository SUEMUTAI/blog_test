<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all posts from the database
        // $posts = Post::all();
        // posts associated with their author and category
        $posts = Post::with('author', 'category')->get();

    
        // Pass posts to the home view
        return view('home', compact('posts'));
    }
    //
}
