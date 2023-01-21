<?php

namespace App\Http\Repositories\Web;

use App\Models\Category;
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
        return Post::query()->where('published',1)->offset($offset)->limit(10)->get();
    }

    /**
     * @param string $slug
     * @return Post|null
     */
    public function getById(string $slug): ?Post
    {
        return Post::query()->where([
            'slug' => $slug,
            'published' => 1
        ])->first();
    }

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Post::where('published',1)->get();
    }

    /**
     * @param int $offset
     * @param int $limit
     * @return Collection
     */
    public function getLatestPosts(int $offset, int $limit): Collection
    {
        return Post::where('published',1)->orderBy('created_at', 'desc')->offset($offset)->take($limit)->get();
    }

    /**
     * @param string $category
     * @param int $offset
     * @param int $limit
     * @return Collection
     */
    public function getByCategory(string $category,int $offset, int $limit): Collection
    {
        return Category::query()->with(['posts', 'posts.user'])->where('category_name', $category)->offset($offset)->limit($limit)->get();
    }

    /**
     * @param string $word
     * @param int $offset
     * @param int $limit
     * @return Collection
     */
    public function getBySearch(string $word,int $offset, int $limit): Collection
    {
        $word = strtolower($word);
        return Post::query()
            ->where('title', 'LIKE', "%{$word}%")
            ->orWhere('body', 'LIKE', "%{$word}%")
            ->offset($offset)->limit($limit)->get();
    }
}
