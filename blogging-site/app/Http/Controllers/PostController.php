<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->query('limit', 10);
    
        $posts = Post::with('author', 'category') //add fields as desired
            ->limit($limit)
            ->get();
    
        return response()->json($posts);
    }
}

