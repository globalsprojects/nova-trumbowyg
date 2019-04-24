<?php

namespace GlobalsProjects\NovaTrumbowyg;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-trumbowyg', __DIR__.'/../dist/js/field.js');
            Nova::style('nova-trumbowyg-icons', __DIR__.'/../fonts/vendor/trumbowyg/dist/ui/icons.svg');
            Nova::style('nova-trumbowyg', __DIR__.'/../dist/css/field.css');
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
