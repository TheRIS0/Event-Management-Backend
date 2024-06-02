<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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
        // Load routes from api.php
        Route::prefix('api')
            ->middleware('api')
            ->namespace('App\Http\Controllers\API')
            ->group(base_path('routes/api.php'));
    }
}
