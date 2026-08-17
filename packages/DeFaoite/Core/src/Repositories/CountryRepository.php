<?php

namespace DeFaoite\Core\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class CountryRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'DeFaoite\Core\Contracts\Country';
    }
}
