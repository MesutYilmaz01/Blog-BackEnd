<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->belongsToMany(Post::class, '_id', 'categories');
    }

    public function postsCounts()
    {
        return $this->belongsToMany(Post::class, '_id', 'categories')->count();
    }
}
