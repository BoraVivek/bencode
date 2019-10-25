<?php

namespace Bhutanio\Bencode;

use Illuminate\Support\ServiceProvider;

class BencodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->app->singleton(Bencode::class);
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
    }
}
