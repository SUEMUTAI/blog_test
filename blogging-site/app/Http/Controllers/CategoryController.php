<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($id)
    {
        // Fetch the category by id
        $category = Category::findOrFail($id);
    
        // Pass category and its posts to the category view
        return view('category', compact('category'));
    }
    
}
