<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\RickAndMortyApiService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RickAndMortyApiService::class, function ($app) {
            return new RickAndMortyApiService();
        });
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
