<?php

namespace App\Providers;

use Backpack\MenuCRUD\app\Models\MenuItem;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        view()->composer('includes.nav', function($view) {
            $view->with('menuItems', MenuItem::getTree());
        });

        view()->composer('includes.slider', function($view) {
            $view->with('slides', \App\Models\Slide::getSlides());
        });

        view()->composer(['welcome'], function($view) {
            $view->with('services', \App\Models\Service::getServices());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
