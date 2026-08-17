<?php

namespace DeFaoite\Product\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class ProductFlatRepository extends Repository
{
    /**
     * Specify model.
     */
    public function model(): string
    {
        return 'DeFaoite\Product\Contracts\ProductFlat';
    }
}
