<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('edit-ad', function ($user, $ad) {
            return $user->id === $ad->user_id;
        });

        Gate::define('edit-profile', function ($user, $profiles) {
            return $user->id === $profiles->user_id;
        });
    }
}
