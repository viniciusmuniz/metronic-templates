<?php

namespace viniciusmuniz\VMmetronic;

use Illuminate\Support\ServiceProvider;

class VMmetronicPathTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'metronic-templates');
        $configPath = __DIR__.'/../config/VMmetronic.php';
        $this->publishes([
            $configPath => config_path('VMmVMmetronicetronic.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
