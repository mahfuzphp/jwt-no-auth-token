<?php

namespace Mahfuzrh\JwtNoAuthToken;

use Illuminate\Support\ServiceProvider;
use Mahfuzrh\JwtNoAuthToken\Commands\JwtNoAuthTokenCommand;

class JwtNoAuthTokenServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/jwt-no-auth-token.php' => config_path('jwt-no-auth-token.php'),
            ], 'config');

            $this->commands([
                JwtNoAuthTokenCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/jwt-no-auth-token.php', 'jwt-no-auth-token');
    }
}
