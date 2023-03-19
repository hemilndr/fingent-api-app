<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Libraries\RateLimiterThroattle;

class RateLimiterThrottleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $maxRequestsPerMinute = 60; // Replace this with your desired value
    
        $this->app->bind('rateLimiterThrottle', function () use ($maxRequestsPerMinute) {
            return new RateLimiterThroattle($maxRequestsPerMinute);
        });
    }
    

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
