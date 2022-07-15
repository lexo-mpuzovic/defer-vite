<?php

namespace LEXO\DeferVite\Providers;

use Illuminate\Support\ServiceProvider;

class DeferViteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Illuminate\Foundation\Vite::class,
            \LEXO\DeferVite\Services\DeferViteService::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
