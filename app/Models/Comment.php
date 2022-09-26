<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $with = array('subComment');


    public function subComment()
    {
        return $this->hasMany(Comment::class, 'parent_id', '_id');
    }
}
