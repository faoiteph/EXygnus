<?php

namespace DeFaoite\Product\Listeners;

use DeFaoite\Product\Helpers\Indexers\Flat as FlatIndexer;
use DeFaoite\Product\Jobs\UpdateCreateInventoryIndex as UpdateCreateInventoryIndexJob;

class Order
{
    /**
     * Create a new listener instance.
     *
     * @return void
     */
    public function __construct(protected FlatIndexer $flatIndexer) {}

    /**
     * After order is created.
     *
     * @param  \DeFaoite\Sale\Contracts\Order  $order
     * @return void
     */
    public function afterCancelOrCreate($order)
    {
        $productIds = $order->all_items
            ->pluck('product_id')
            ->filter()
            ->unique()
            ->values()
            ->toArray();

        $this->flatIndexer->refreshDerivedColumns($productIds);

        UpdateCreateInventoryIndexJob::dispatch($productIds);
    }
}
