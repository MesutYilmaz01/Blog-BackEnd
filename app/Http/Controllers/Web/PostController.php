<?php

namespace App\Http\Controllers\Web;

use App\Http\Contracts\Web\IPostService;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

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
     * @return AnonymousResourceCollection
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

    /**
     * @return PostResource
     */
   public function popularPosts()
   {
       $sorted = $this->postService->popularPosts()->sortBy(function($post)
       {
           return $post->commentCount();
       });

       return PostResource::collection($sorted->splice($sorted->count()-3,3)->reverse());
   }

    /**
     * @param int $offset
     * @param int $limit
     * @return AnonymousResourceCollection
     */
   public function latestPosts(int $offset, int $limit)
   {
       return PostResource::collection($this->postService->getLatestPosts($offset, $limit));
   }

   public function getByCategory(string $category, int $offset, int $limit): ?AnonymousResourceCollection
   {
       $posts = $this->postService->getByCategory($category, $offset, $limit);
       if ($posts->isEmpty()) {
           return null;
       }
       return PostResource::collection($posts[0]->posts);
   }

   public function getBySearch(Request $request): ?AnonymousResourceCollection
   {
       if (!$request->has('word') || !$request->has('offset') || !$request->has('limit')) {
           return null;
       }

       $posts = $this->postService->getBySearch($request->input('word'), $request->input('offset'), $request->input('limit'));

       if ($posts->isEmpty()) {
           return null;
       }
       return PostResource::collection($posts[0]->posts);
   }

}
