<?php

namespace Versatile\Html;

use Illuminate\Support\ServiceProvider;

use Versatile\Html\Bootstrap\Bootstrap;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'html');

        $this->app->singleton('bootstrap', function($app) {
            return new Bootstrap($app['html'], $app['form'], $app['config']);
        });
    }

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('html.php')
        ], 'config');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['bootstrap'];
    }
}
