<?php

namespace Schn\LaravelNswComponents;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LaravelNswComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/components', 'laravelnswcomponents');

        // Layout
        Blade::component('laravelnswcomponents::layout.container', 'nsw-container');
        Blade::component('laravelnswcomponents::layout.grid', 'nsw-grid');
        Blade::component('laravelnswcomponents::layout.col', 'nsw-col');

        // Accordions
        Blade::component('laravelnswcomponents::accordion-container', 'nsw-accordion');
        Blade::component('laravelnswcomponents::accordion-panel', 'nsw-panel');

        
        // Components
        // Blade::component('laravelnswcomponents::button', 'nsw-button');
        Blade::component('laravelnswcomponents::card', 'nsw-card');
        Blade::component('laravelnswcomponents::callout', 'nsw-callout');
        Blade::component('laravelnswcomponents::global-alert', 'nsw-global-alert');
        Blade::component('laravelnswcomponents::notification', 'nsw-notification');
        Blade::component('laravelnswcomponents::tab', 'nsw-tab');
        Blade::component('laravelnswcomponents::tabs', 'nsw-tabs');

        // Forms
        // Blade::component('laravelnswcomponents::input', 'nsw-input');
        // Blade::component('laravelnswcomponents::textarea', 'nsw-textarea');
        // Blade::component('laravelnswcomponents::select', 'nsw-select');
        // Blade::component('laravelnswcomponents::radio', 'nsw-radio');
        // Blade::component('laravelnswcomponents::checkbox', 'nsw-checkbox');
    }
}
