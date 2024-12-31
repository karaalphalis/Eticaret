<?php

namespace App\Providers;

use App\Events\UserRegisterEvent;
use App\Listeners\UserRegisterListener;
use App\Models\User;
use App\Observers\UserObserver;
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
        User::Observe(UserObserver::class);
    }
}
