<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
 
    protected $fillable = ['title', 'content', 'author_id', 'category_id', 'featured_image_url'];

   // Define the relationship with the Author model
   public function author()
   {
       return $this->belongsTo(Author::class);
   }

   // Define the relationship with the Category model
   public function category()
   {
       return $this->belongsTo(Category::class);
   }
}
