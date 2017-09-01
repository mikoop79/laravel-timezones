<?php

namespace W3digital\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //Load views here 

        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        $this->publishes([
        __DIR__.'/views' => base_path('resources/views/w3digital/timezones'),
    ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //load routes 
        include __DIR__.'/routes.php';
        $this->app->make('W3digital\Timezones\TimezonesController');
    }
}
