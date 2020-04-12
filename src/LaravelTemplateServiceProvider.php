<?php

namespace Aminetiyal\LaravelTemplate;

use Aminetiyal\LaravelTemplate\Components\Lte\Breadcrumb;
use Aminetiyal\LaravelTemplate\Components\Lte\Field\Checkbox;
use Aminetiyal\LaravelTemplate\Components\Lte\Field\Input;
use Aminetiyal\LaravelTemplate\Components\Lte\Field\Password;
use Aminetiyal\LaravelTemplate\Components\Lte\Footer;
use Aminetiyal\LaravelTemplate\Components\Lte\MenuItem;
use Aminetiyal\LaravelTemplate\Components\Lte\Navbar;
use Aminetiyal\LaravelTemplate\Components\Lte\Scripts;
use Aminetiyal\LaravelTemplate\Components\Lte\sidebar;
use Aminetiyal\LaravelTemplate\Components\Lte\Styles;
use Illuminate\Support\ServiceProvider;

class LaravelTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'template');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'template');

        $this->bootAdminLte();

        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            // config
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('template.php'),
            ], 'template-config');


            // Publishing the translation files.
            $this->publishes([
                __DIR__ . '/../resources/lang' => resource_path('lang/vendor/template/'),
            ], 'template-lang');

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
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'template');

        // Register the main class to use with the facade
        $this->app->singleton('template', function () {
            return new LaravelTemplate;
        });
    }

    public function bootAdminLte()
    {
        $this->loadAdminLteComponents();

        if ($this->app->runningInConsole()) {
            // Publishing the views.
            $this->publishes([
                __DIR__ . '/../resources/views/lte' => resource_path('views/vendor/template/lte'),
            ], 'template-adminlte-views');

            // Publishing assets.
            $this->publishes([
                __DIR__.'/../resources/assets/lte' => public_path('vendor/laravel-template/lte'),
            ], 'template-adminlte-assets');

            // Publishing profile controller.
            $this->publishes([
                __DIR__.'/../src/Http/Controllers/Auth/' => app_path('Http/Controllers/Auth'),
            ], 'template-profile-controller');
        }
    }

    public function loadAdminLteComponents()
    {
        // Loading layouts
        $this->loadViewComponentsAs('lte', [
            Sidebar::class,
            Navbar::class,
            Styles::class,
            Scripts::class,
            Footer::class,
            MenuItem::class,
            Breadcrumb::class,
        ]);

        // Loading fields
        $this->loadViewComponentsAs('lte-field', [
            Input::class,
            Password::class,
            Checkbox::class,
        ]);
    }
}
