<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function show($id)
    {
        // Fetch the author by id
        $author = Author::findOrFail($id);
    
        // Pass author and their posts to the author view
        return view('author', compact('author'));
    }
    
}
