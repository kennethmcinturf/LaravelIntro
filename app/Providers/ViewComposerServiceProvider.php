<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeNavigation();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function composeNavigation()
    {
        // view()->composer('navbar', 'App\Http\Composers\NavigationComposer');
        view()->composer('navbar', function($view){
            $view->with('latest', \App\Article::latest()->first());
        });
    }
}
