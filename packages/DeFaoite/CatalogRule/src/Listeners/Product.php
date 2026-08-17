<?php

namespace DeFaoite\CatalogRule\Listeners;

use DeFaoite\CatalogRule\Jobs\UpdateCreateProductIndex as UpdateCreateProductIndexJob;

class Product
{
    /**
     * @param  \DeFaoite\Product\Contracts\Product  $product
     * @return void
     */
    public function afterUpdate($product)
    {
        UpdateCreateProductIndexJob::dispatch($product);
    }
}
