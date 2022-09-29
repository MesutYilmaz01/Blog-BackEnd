<?php

namespace App\Http\Repositories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostRepository
{

    /**
     * @param int $offset
     * @return Collection
     */
    public function getByLimit(int $offset): Collection
    {
        return Post::query()->offset($offset)->limit(10)->get();
    }

    /**
     * @param string $slug
     * @return Post|null
     */
    public function getById(string $slug): ?Post
    {
        return Post::query()->where('slug',$slug)->first();
    }

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Post::all();
    }

    /**
     * @param int $limit
     * @return Collection
     */
    public function getLatestPosts(int $limit): Collection
    {
        return Post::all()->sortBy(function ($post) {
            return $post->created_at;
        })->reverse()->take($limit);
    }

}
