<?php

namespace SimpleSoftwareIO\QrCode;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    protected $defer = true;
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->bind('qrcode', function () {
            return new Generator();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Generator::class];
    }
}
