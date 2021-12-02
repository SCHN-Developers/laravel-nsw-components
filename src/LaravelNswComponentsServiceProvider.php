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
        Blade::component('laravelnswcomponents::layout.masthead', 'nsw-masthead');
        Blade::component('laravelnswcomponents::layout.container', 'nsw-container');
        Blade::component('laravelnswcomponents::layout.grid', 'nsw-grid');
        Blade::component('laravelnswcomponents::layout.col', 'nsw-col');
        Blade::component('laravelnswcomponents::layout.section', 'nsw-section');
        Blade::component('laravelnswcomponents::layout.header', 'nsw-header');

        // Accordions
        Blade::component('laravelnswcomponents::accordion-container', 'nsw-accordion');
        Blade::component('laravelnswcomponents::accordion-panel', 'nsw-panel');

        // Components
        Blade::component('laravelnswcomponents::button', 'nsw-button');
        Blade::component('laravelnswcomponents::card', 'nsw-card');
        Blade::component('laravelnswcomponents::callout', 'nsw-callout');
        Blade::component('laravelnswcomponents::global-alert', 'nsw-global-alert');
        Blade::component('laravelnswcomponents::notification', 'nsw-notification');
        Blade::component('laravelnswcomponents::tab', 'nsw-tab');
        Blade::component('laravelnswcomponents::tabs', 'nsw-tabs');
        Blade::component('laravelnswcomponents::hero-classic', 'nsw-hero-classic');
        Blade::component('laravelnswcomponents::hero-banner', 'nsw-hero-banner');
        Blade::component('laravelnswcomponents::link-list', 'nsw-link-list');
        Blade::component('laravelnswcomponents::link-list-item', 'nsw-list-item');
        Blade::component('laravelnswcomponents::filter-container', 'nsw-filters');


        // Forms
        Blade::component('laravelnswcomponents::forms.container', 'nsw-form');
        Blade::component('laravelnswcomponents::forms.text-field', 'nsw-input');
        Blade::component('laravelnswcomponents::forms.select', 'nsw-select');
        Blade::component('laravelnswcomponents::forms.checkbox', 'nsw-checkbox');
        Blade::component('laravelnswcomponents::forms.checkbox-group', 'nsw-checkbox-group');
        Blade::component('laravelnswcomponents::forms.radio-group', 'nsw-radio-group');

      // Navigation
        Blade::component('laravelnswcomponents::navigation.navigation-container', 'nsw-nav-container');
        Blade::component('laravelnswcomponents::navigation.navigation-item', 'nsw-nav-item');
        Blade::component('laravelnswcomponents::navigation.navigation-subitem', 'nsw-nav-subitem');


    }
}
