<?php

namespace App\Http\Controllers;

use App\Http\Contracts\IPostService;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * @var IPostService
     */
    private IPostService $postService;

    /**
     * @param IPostService $postService
     */
    public function __construct(IPostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * @param int $offset
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
   public function getByOffset(int $offset)
   {
       return PostResource::collection($this->postService->getByLimit($offset));
   }

    /**
     * @param string $slug
     * @return PostResource
     */
   public function getById(string $slug)
   {
       return new PostResource($this->postService->getById($slug));
   }
}
