<?php

namespace DeFaoite\Product\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class ProductPriceIndexRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'DeFaoite\Product\Contracts\ProductPriceIndex';
    }
}
