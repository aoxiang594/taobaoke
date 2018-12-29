<?php

namespace Aoxiang\Taobaoke;

use Illuminate\Support\ServiceProvider;
use Aoxiang\Taobaoke\Libraries\Library;

class TaobaokeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/config.php' => config_path('taobaoke.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('taobaoke', function() {
            return new Library();
        });

        $this->app->bind('Aoxiang\Taobaoke\Contracts\Contract', 'Aoxiang\Taobaoke\Libraries\Library');
    }
}
