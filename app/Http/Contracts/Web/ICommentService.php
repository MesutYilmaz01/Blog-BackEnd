<?php

namespace App\Http\Contracts\Web;

use App\Http\Requests\Message\MessageStoreRequest;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Collection;

interface ICommentService
{
    /**
     * @param array $data
     * @return Comment|null
     */
    public function store(array $data): ?Comment;
}
