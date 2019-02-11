<?php

namespace App\Providers;

use App\JobOffers\Api\AppManagerApi;
use App\JobOffers\Api\OffersApiInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(OffersApiInterface::class, AppManagerApi::class);
    }
}
