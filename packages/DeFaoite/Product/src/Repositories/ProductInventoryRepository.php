<?php

namespace DeFaoite\Product\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class ProductInventoryRepository extends Repository
{
    /**
     * Specify Model class name.
     */
    public function model(): string
    {
        return 'DeFaoite\Product\Contracts\ProductInventory';
    }

    /**
     * @param  DeFaoite\Product\Contracts\Product  $product
     * @return void
     */
    public function saveInventories(array $data, $product)
    {
        if (! isset($data['inventories'])) {
            return;
        }

        foreach ($data['inventories'] as $inventorySourceId => $qty) {
            $this->updateOrCreate([
                'product_id' => $product->id,
                'inventory_source_id' => $inventorySourceId,
                'vendor_id' => $data['vendor_id'] ?? 0,
            ], [
                'qty' => $qty ?? 0,
            ]);
        }
    }
}
