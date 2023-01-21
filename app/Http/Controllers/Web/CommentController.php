<?php

namespace App\Http\Controllers\Web;

use App\Http\Contracts\Web\ICommentService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\CommentStoreRequest;
use Illuminate\Http\JsonResponse;

class CommentController extends Controller
{
    /**
     * @var ICommentService
     */
    private ICommentService $commentService;

    /**
     * @param ICommentService $commentService
     */
    public function __construct(ICommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    /**
     * @param CommentStoreRequest $request
     * @return JsonResponse
     */
    public function store(CommentStoreRequest $request): JsonResponse
    {
        $comment = $this->commentService->store($request->all());
        if (!$comment) {
            return response()->json(["message" => "Yorumunuz eklenemedi..."]);
        }
        return response()->json(["message" => "Yorumunuz Eklendi..."]);
    }
}
