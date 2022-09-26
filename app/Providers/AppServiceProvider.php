<?php

namespace App\Providers;

use App\Http\Contracts\IPostService;
use App\Http\Services\PostService;
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
    }
}
