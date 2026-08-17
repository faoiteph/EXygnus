<?php

namespace DeFaoite\Product\Repositories;

class ProductVideoRepository extends ProductMediaRepository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'DeFaoite\Product\Contracts\ProductVideo';
    }
}
