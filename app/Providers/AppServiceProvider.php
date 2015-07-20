<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        include(app_path('helpers.php'));
        include(app_path('creators.php'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\App\Classes\Title::class, function () {
            return new \App\Classes\Title(config('app.sitename'));
        });
        $this->app->bind('title', \App\Classes\Title::class);
    }
}
