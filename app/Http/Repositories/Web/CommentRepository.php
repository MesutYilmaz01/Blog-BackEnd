<?php

namespace App\Http\Repositories\Web;

use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Collection;

class CommentRepository
{
    /**
     * @param array $data
     * @return Comment|null
     */
    public function store(array $data): ?Comment
    {
        return Comment::create($data);
    }
}
