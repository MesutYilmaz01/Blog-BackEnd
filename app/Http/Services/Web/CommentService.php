<?php

namespace App\Http\Services\Web;

use App\Http\Contracts\Web\ICommentService;
use App\Http\Repositories\Web\CommentRepository;
use App\Models\Comment;

class CommentService implements ICommentService
{
    /**
     * @var CommentRepository
     */
    private CommentRepository $commentRepository;

    /**
     * @param CommentRepository $commentRepository
     */
    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    /**
     * @param array $data
     * @return Comment|null
     */
    public function store(array $data): ?Comment
    {
        return $this->commentRepository->store($data);

    }
}
