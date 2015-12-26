<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\RocketLauncher;

class RocketShipServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind('App\Helpers\Contracts\RocketShipContract',
            function() {
                return new RocketShip();
            });
    }

    public function provides()
    {
        return ['App\Helpers\Contracts\RocketShipContract'];
    } // end provides function
}
