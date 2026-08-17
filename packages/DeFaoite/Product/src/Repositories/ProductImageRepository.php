<?php

namespace DeFaoite\Product\Repositories;

class ProductImageRepository extends ProductMediaRepository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'DeFaoite\Product\Contracts\ProductImage';
    }
}
