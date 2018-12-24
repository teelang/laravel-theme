<?php
namespace TeeLaravel\Theme;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../config/theme.php' => config_path('theme.php')], 'config');
        }
        $this->app->singleton(Theme::class, function ($app) {
            return new Theme($app);
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/theme.php', 'theme');
    }
}
