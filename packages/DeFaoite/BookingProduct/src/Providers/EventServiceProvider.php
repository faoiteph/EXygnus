<?php

namespace DeFaoite\BookingProduct\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use DeFaoite\BookingProduct\Listeners\Order;
use DeFaoite\BookingProduct\Listeners\PriceNote;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'checkout.order.save.after' => [
            [Order::class, 'afterPlaceOrder'],
        ],

        'exygnus.shop.products.price.after' => [
            [PriceNote::class, 'addNote'],
        ],
    ];
}
