<?php

namespace LPolygonIO;

use Illuminate\Support\ServiceProvider;

class PolygonIOServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RestIO::class, function () {
            return new RestIO(config('polygonio.apiKey', ''));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/polygonio.php' => config_path('polygonio.php'),
        ]);
    }
}
