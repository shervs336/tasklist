<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('components.content-header', 'contentHeader');
        Blade::component('components.breadcrumb', 'breadcrumb');
        Blade::component('components.alert', 'alert');
        Blade::component('components.info-box', 'infoBox');
    }
}
