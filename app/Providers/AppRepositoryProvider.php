<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppRepositoryProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()

    {
        $this->app->bind("App\Http\Contracts\Repositories\UserRepInterface", "App\Http\Repositories\Users");
        $this->app->bind("App\Http\Contracts\Repositories\QuestionRepInterface", "App\Http\Repositories\Questions");
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
