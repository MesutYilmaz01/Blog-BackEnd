<?php

namespace App\Http\Contracts\Web;

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

    /**
     * @return Collection
     */
    public function popularPosts(): Collection;

    /**
     * @param int $offset
     * @param int $limit
     * @return Collection
     */
    public function getLatestPosts(int $offset, int $limit): Collection;

    /**
     * @param string $category
     * @param int $offset
     * @param int $limit
     * @return Collection
     */
    public function getByCategory(string $category, int $offset, int $limit): Collection;

    /**
     * @param string $word
     * @param int $offset
     * @param int $limit
     * @return Collection
     */
    public function getBySearch(string $word, int $offset, int $limit): Collection;
}
