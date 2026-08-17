<?php

namespace DeFaoite\Core\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class CountryStateRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'DeFaoite\Core\Contracts\CountryState';
    }
}
