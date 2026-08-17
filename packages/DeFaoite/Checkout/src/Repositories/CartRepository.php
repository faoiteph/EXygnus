<?php

namespace DeFaoite\Checkout\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class CartRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'DeFaoite\Checkout\Contracts\Cart';
    }
}
