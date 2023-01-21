<?php

namespace App\Providers;

use App\Http\Contracts\Web\ICommentService;
use App\Http\Contracts\Web\IMessageService;
use App\Http\Contracts\Web\IPostService;
use App\Http\Contracts\Web\ICategoryService;
use App\Http\Contracts\Web\ITagService;
use App\Http\Services\Web\CommentService;
use App\Http\Services\Web\MessageService;
use App\Http\Services\Web\PostService;
use App\Http\Services\Web\CategoryService;
use App\Http\Services\Web\TagService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->app->bind(IUserService::class, UserService::class);
        $this->app->bind(IPostService::class, PostService::class);
        $this->app->bind(ICategoryService::class, CategoryService::class);
        $this->app->bind(ITagService::class, TagService::class);
        $this->app->bind(IMessageService::class, MessageService::class);
        $this->app->bind(ICommentService::class, CommentService::class);

        /**
         * DB::listen(function($query) {
        Log::info(
        $query->sql,
        $query->bindings,
        $query->time
        );
        });
         */
    }
}
