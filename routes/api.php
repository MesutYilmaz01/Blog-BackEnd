<?php

use App\Http\Controllers\Web\CommentController;
use App\Http\Controllers\Web\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PostController;
use App\Http\Controllers\Web\CategoryController;
use App\Http\Controllers\Web\TagController;
use App\Http\Controllers\Web\StaticKeyController;



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
Route::get('/latest-posts/{offset}/{limit}', [PostController::class, 'latestPosts']);
Route::get('/posts/category/{category}/{offset}/{limit}', [PostController::class, 'getByCategory']);
Route::get('/categories', [CategoryController::class, 'getAll']);
Route::get('/tags', [TagController::class, 'getAll']);
Route::get('/static-keys', [StaticKeyController::class, 'getAll']);
Route::get('/about-me', [StaticKeyController::class, 'aboutMe']);
Route::get('/social-medias', [StaticKeyController::class, 'socialMedias']);
Route::get('/getBySearch', [PostController::class, 'getBySearch']);
Route::post('/send-message', [MessageController::class, 'store']);
Route::post('/send-comment', [CommentController::class, 'store']);








