<?php

namespace Bhutanio\Laravel;


use Bhutanio\Bencode\Bencode;
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