<?php

namespace Oxedition\LaravelWelcomeMinimal;

use Illuminate\Support\ServiceProvider;
use Oxedition\LaravelWelcomeMinimal\Console\InstallCommand;
use Oxedition\LaravelWelcomeMinimal\Console\ColorCommand;

class LaravelWelcomeMinimalServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/minimal.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('minimal.php'),
            ], 'laravel-welcome-minimal-config');

            $this->publishes([
                __DIR__.'/../resources/views/' => resource_path('views/'),
            ], 'laravel-welcome-minimal-views');

            $this->publishes([
                __DIR__.'/../resources/components/' => resource_path('views/components/ox/'),
            ], 'laravel-welcome-minimal-components'); 
            
            $this->publishes([
                __DIR__.'/../resources/public/' => public_path('/'),
            ], 'laravel-welcome-minimal-images');             

            $this->publishes([
                 __DIR__.'/../resources/css' => resource_path('css/'),
            ], 'laravel-welcome-minimal-css');


            $this->commands([
                InstallCommand::class,
                ColorCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'minimal');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-welcome-minimal', function () {
            return new LaravelWelcomeMinimal;
        });
    }
}
