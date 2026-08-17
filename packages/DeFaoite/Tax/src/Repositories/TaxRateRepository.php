<?php

namespace DeFaoite\Tax\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class TaxRateRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'DeFaoite\Tax\Contracts\TaxRate';
    }
}
