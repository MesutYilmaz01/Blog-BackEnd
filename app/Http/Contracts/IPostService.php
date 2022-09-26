<?php

namespace App\Http\Contracts;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

interface IPostService
{
    /**
     * @param int $offset
     * @return Collection
     */
    public function getByLimit(int $offset): Collection;

    /**
     * @param string $slug
     * @return Post|null
     */
    public function getById(string $slug): ?Post;
}
