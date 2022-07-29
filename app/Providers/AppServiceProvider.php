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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            \App\Services\Interfaces\ICarService::class,
            \App\Services\CarService::class
        );

        $this->app->bind(
            \App\ReposItories\Interfaces\ICarRepository::class,
            \App\ReposItories\CarRepository::class
        );
    }
}
