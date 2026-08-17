<?php

namespace DeFaoite\CartRule\Listeners;

use DeFaoite\CartRule\Helpers\CartRule;

class Cart
{
    /**
     * Create a new listener instance.
     *
     * @param  \DeFaoite\CartRule\Repositories\CartRule  $cartRuleHelper
     * @return void
     */
    public function __construct(protected CartRule $cartRuleHelper) {}

    /**
     * Apply valid cart rules to cart
     *
     * @param  \DeFaoite\Checkout\Contracts\Cart  $cart
     * @return void
     */
    public function applyCartRules($cart)
    {
        $this->cartRuleHelper->collect($cart);
    }
}
