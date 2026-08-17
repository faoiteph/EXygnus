<?php

namespace DeFaoite\Customer\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class CustomerGroupRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'DeFaoite\Customer\Contracts\CustomerGroup';
    }
}
