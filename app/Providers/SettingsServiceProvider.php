<?php

namespace App\Providers;

use App\Settings\SiteSettings;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Config::set('app.name', app(SiteSettings::class)->name);
    }
}
