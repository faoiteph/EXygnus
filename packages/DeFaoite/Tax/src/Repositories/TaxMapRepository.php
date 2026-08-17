<?php

namespace DeFaoite\Tax\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class TaxMapRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'DeFaoite\Tax\Contracts\TaxMap';
    }
}
