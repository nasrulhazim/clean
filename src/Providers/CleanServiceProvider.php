<?php

namespace NasrulHazim\Clean\Providers;

use Illuminate\Support\ServiceProvider;

use NasrulHazim\Clean\Console\Commands\CleanUp;
use NasrulHazim\Clean\Console\Commands\CleanUpServe;

class CleanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            CleanUp::class,
            CleanUpServe::class
        ]);
    }
}
