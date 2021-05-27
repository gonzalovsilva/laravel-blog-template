<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static function getCategories()
    {
        $categories = Category::distinct('name')->get();

        // dd($categories);
        return  $categories;
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

