<?php

namespace App\Http\Controllers;

use App\Http\Contracts\IPostService;
use Illuminate\Http\Request;

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
