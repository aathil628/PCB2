<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Gate;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Define the admin guard
        Auth::provider('admin', function ($app, array $config) {
            return new \Illuminate\Auth\EloquentUserProvider($app['hash'], $config['model']);
        });
    }
}
