<?php

namespace DeFaoite\Checkout\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [
        'DeFaoite\Checkout\Listeners\CustomerEventsHandler',
    ];
}
