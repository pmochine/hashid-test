<?php

namespace Example;

use Illuminate\Support\ServiceProvider;
use Vinkla\Hashids\HashidsServiceProvider;

class ExampleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(HashidsServiceProvider::class);
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Hashids', \Vinkla\Hashids\Facades\Hashids::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
