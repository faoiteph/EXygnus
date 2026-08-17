<?php

namespace DeFaoite\CartRule\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class CartRuleCustomerRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'DeFaoite\CartRule\Contracts\CartRuleCustomer';
    }
}
