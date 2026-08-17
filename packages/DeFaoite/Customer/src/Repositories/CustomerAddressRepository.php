<?php

namespace DeFaoite\Customer\Repositories;

use DeFaoite\Core\Eloquent\Repository;
use DeFaoite\Customer\Contracts\CustomerAddress;

class CustomerAddressRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return CustomerAddress::class;
    }
}
