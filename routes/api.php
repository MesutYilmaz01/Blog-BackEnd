<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts/{offset}', [PostController::class, 'getByOffset']);
Route::get('/post/{id}', [PostController::class, 'getById']);
Route::get('/popular-posts', [PostController::class, 'popularPosts']);
Route::get('/latest-posts/{limit}', [PostController::class, 'latestPosts']);



