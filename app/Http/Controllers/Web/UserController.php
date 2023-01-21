<?php

namespace App\Http\Controllers\Web;

use App\Http\Contracts\Web\IPostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
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

    public function index(int $offset)
    {
        echo $offset;
    }
}
