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
        return $this->hasMany(Comment::class)->where('parent_id',null);
    }

    public function commentCount()
    {
        return $this->hasMany(Comment::class)->count();
    }
}
