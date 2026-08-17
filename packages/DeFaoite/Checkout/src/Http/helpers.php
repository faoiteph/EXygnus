<?php

use DeFaoite\Checkout\Facades\Cart;

if (! function_exists('cart')) {
    /**
     * Cart helper.
     *
     * @return DeFaoite\Checkout\Cart
     */
    function cart()
    {
        return Cart::getFacadeRoot();
    }
}
