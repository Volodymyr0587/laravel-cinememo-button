<?php

namespace Volodymyr\LaravelCinememoButton;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class CinememoButtonServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'cinememo');

        // Register <x-cinememo-button>
        Blade::component('cinememo::components.cinememo-button', 'cinememo-button');

        // Allow publishing
        $this->publishes([
            __DIR__ . '/../resources/views/components/cinememo-button.blade.php' =>
                resource_path('views/components/cinememo-button.blade.php'),
        ], 'cinememo-button-views');
    }
}