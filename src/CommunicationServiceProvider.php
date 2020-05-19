<?php

namespace Suryamunirathinam\Communication;

use Illuminate\Support\ServiceProvider;

class CommunicationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'communication');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/communication.php', 'communication'
        );

    }


    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/communication.php' => config_path('communication.php')
        ]);

    }
}
