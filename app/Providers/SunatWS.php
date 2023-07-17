<?php

namespace App\Providers;

use App\Services\WebServiceSunat;
use Greenter\Ws\Services\SunatEndpoints;
use Illuminate\Support\ServiceProvider;

class SunatWS extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->singleton(WebServiceSunat::class,function ($app){
            return new WebServiceSunat('certificates/prive-pub-keys.pem',SunatEndpoints::FE_BETA);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
