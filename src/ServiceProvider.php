<?php

namespace DraperStudio\Parsedown;

use Parsedown;
use Illuminate\Support\ServiceProvider as IlluminateProvider;

class ServiceProvider extends IlluminateProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('parsedown', function ($app) {
            return new Parsedown();
        });
    }
}
