<?php

namespace App\Http\Controllers\Web;

use App\Http\Contracts\Web\ITagService;
use App\Http\Controllers\Controller;
use App\Http\Resources\TagResource;
use Illuminate\Http\Request;

class TagController extends Controller
{

    /**
     * @var ITagService
     */
    private ITagService $tagService;

    /**
     * @param ITagService $tagService
     */
    public function __construct(ITagService $tagService)
    {
        $this->tagService = $tagService;
    }

    /**
     * @return TagResource
     */
    public function getAll()
    {
        return TagResource::collection($this->tagService->getTags());
    }
}
