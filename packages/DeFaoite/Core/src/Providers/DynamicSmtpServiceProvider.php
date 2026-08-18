<?php

namespace DeFaoite\Core\Providers;

use Illuminate\Support\ServiceProvider;
use DeFaoite\Core\Mail\Transport\DynamicSmtpTransport;

class DynamicSmtpServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     */
    public function boot(): void
    {
        $this->app['mail.manager']->extend('exygnus-dynamic-smtp', function () {
            return new DynamicSmtpTransport;
        });
    }
}
