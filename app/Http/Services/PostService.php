<?php

namespace App\Http\Services;

use App\Http\Contracts\IPostService;
use App\Http\Repositories\PostRepository;
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
}
