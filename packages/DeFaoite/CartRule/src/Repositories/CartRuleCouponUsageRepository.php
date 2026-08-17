<?php

namespace DeFaoite\CartRule\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class CartRuleCouponUsageRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'DeFaoite\CartRule\Contracts\CartRuleCouponUsage';
    }
}
