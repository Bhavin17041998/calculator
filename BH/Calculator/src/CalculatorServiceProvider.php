<?php

namespace BH\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Register your package's services here
        $this->app->make('BH\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/view', 'calculator');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
