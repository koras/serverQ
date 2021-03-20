<?php

namespace App\Providers;

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

        $this->app->bind("App\Http\Contracts\UserServiceInterface", "App\Http\Services\UserService");
        $this->app->bind("App\Http\Contracts\QuestionsServiceInterface", "App\Http\Services\QuestionService");
      //  $this->app->bind(Illuminate\Database\Eloquent::class, GCCA\Repositories\Entreprise\EloquentEntrepriseRepositor::class);  
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
