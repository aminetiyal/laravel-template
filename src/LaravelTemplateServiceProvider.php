<?php

namespace Aminetiyal\LaravelTemplate;

use Aminetiyal\LaravelTemplate\Components\Breadcrumb;
use Aminetiyal\LaravelTemplate\Components\Footer;
use Aminetiyal\LaravelTemplate\Components\MenuItem;
use Aminetiyal\LaravelTemplate\Components\Navbar;
use Aminetiyal\LaravelTemplate\Components\Scripts;
use Aminetiyal\LaravelTemplate\Components\sidebar;
use Aminetiyal\LaravelTemplate\Components\Styles;
use Illuminate\Support\ServiceProvider;

class LaravelTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'template');

        $this->loadComponents();

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'template');

        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('template.php'),
            ], 'config');


            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/template'),
            ], 'laravel-template');

            // Publishing the translation files.
            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/template'),
            ], 'laravel-template');

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-template'),
            ], 'assets');*/



            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'template');

        // Register the main class to use with the facade
        $this->app->singleton('template', function () {
            return new LaravelTemplate;
        });
    }

    public function loadComponents()
    {
        $this->loadViewComponentsAs('template', [
            Sidebar::class,
            Navbar::class,
            Styles::class,
            Scripts::class,
            Footer::class,
            MenuItem::class,
            Breadcrumb::class,
        ]);
    }
}
