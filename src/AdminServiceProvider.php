<?php

namespace gndlovu\admin;

use Illuminate\Support\ServiceProvider;
use Config;
use App;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'admin');

        if (!$this->app->routesAreCached())
        {
            require __DIR__.'/routes/web.php';
        }

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/admin'),
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register('Collective\Html\HtmlServiceProvider');

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Html', 'Collective\Html\HtmlFacade');
        $loader->alias('Form', 'Collective\Html\FormFacade');

        Config::set('auth.providers.users', array('driver' => 'eloquent', 'model' => \gndlovu\admin\Models\User::class,));
    }
}
