<?php

namespace DeFaoite\Checkout\Providers;

use DeFaoite\Checkout\Models\Cart;
use DeFaoite\Checkout\Models\CartAddress;
use DeFaoite\Checkout\Models\CartItem;
use DeFaoite\Checkout\Models\CartPayment;
use DeFaoite\Checkout\Models\CartShippingRate;
use DeFaoite\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        Cart::class,
        CartAddress::class,
        CartItem::class,
        CartPayment::class,
        CartShippingRate::class,
    ];
}
