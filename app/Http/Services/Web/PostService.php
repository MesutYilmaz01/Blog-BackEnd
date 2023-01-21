<?php

namespace App\Http\Services\Web;

use App\Http\Contracts\Web\IPostService;
use App\Http\Repositories\Web\PostRepository;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostService implements IPostService
{
    /**
     * @var PostRepository
     */
    private PostRepository $postRepository;

    /**
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @param int $offset
     * @return Collection
     */
    public function getByLimit(int $offset): Collection
    {
        return $this->postRepository->getByLimit($offset);
    }

    /**
     * @param string $slug
     * @return Post|null
     */
    public function getById(string $slug): ?Post
    {
        return $this->postRepository->getById($slug);
    }

    /**
     * @return Collection
     */
    public function popularPosts(): Collection
    {
        return $this->postRepository->getAll();
    }

    /**
     * @param int $offset
     * @param int $limit
     * @return Collection
     */
    public function getLatestPosts(int $offset, int $limit): Collection
    {
        return $this->postRepository->getLatestPosts($offset, $limit);
    }

    /**
     * @param string $category
     * @param int $offset
     * @param int $limit
     * @return Collection
     */
    public function getByCategory(string $category, int $offset, int $limit): Collection
    {
        return $this->postRepository->getByCategory($category, $offset, $limit);
    }

    /**
     * @param string $word
     * @param int $offset
     * @param int $limit
     * @return Collection
     */
    public function getBySearch(string $word, int $offset, int $limit): Collection
    {
        return $this->postRepository->getBySearch($word, $offset, $limit);
    }

}
