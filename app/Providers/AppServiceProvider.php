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
    public function register(): void
    {
        // It will be loaded after the auto-load is executed
        // so that it can be found by other modules
        $this->app->register(TelescopeServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
         if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
