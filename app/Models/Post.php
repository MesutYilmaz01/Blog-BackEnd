<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->where('parent_id',null)->where('approved',1);
    }

    public function commentCount()
    {
        return $this->hasMany(Comment::class)->where('approved',1)->count();
    }

    public function coverImage()
    {
        return $this->hasOne(Image::class)->where('image_type','=','cover');
    }

    public function categoryList()
    {
        return $this->embedsMany(Category::class, 'categories', '_id');
    }
}
