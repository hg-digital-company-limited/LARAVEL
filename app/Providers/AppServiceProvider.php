<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Socialite::extend('facebook', function ($app) {
            $config = $app['config']['services.facebook'];
            return Socialite::buildProvider(\Laravel\Socialite\Two\FacebookProvider::class, $config);
        });
    }
}
