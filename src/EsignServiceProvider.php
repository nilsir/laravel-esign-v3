<?php

namespace Nilsir\LaravelEsignV3;

use Illuminate\Support\ServiceProvider;

class EsignServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        $this->publishes([
            \dirname(__DIR__).'/migrations/' => database_path('migrations'),
        ], 'migrations');

        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(\dirname(__DIR__).'/migrations/');
        }
    }

    public function register()
    {
//        $this->app->singleton(Package::class, function(){
//            return new Package();
//        });
    }
}
