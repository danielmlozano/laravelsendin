<?php

namespace Danielmlozano\LaravelSendin;

use Illuminate\Support\ServiceProvider;

class LaravelSendinServiceProvider extends ServiceProvider
{
    /**
     * Registers any application services
     *
     * @access public
     * @return void
     */
    public function register()
    {
        $this->configure();
    }

    /**
     * Setup the configuration for Laravel Sendin
     *
     * @access public
     * @return void
     */
    public function configure()
    {
        $this->mergeConfigFrom(
            __DIR__ . "/../config/laravelsendin.php",
            "laravelsendin"
        );
    }
}
