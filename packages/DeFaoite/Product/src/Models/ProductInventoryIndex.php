<?php

namespace DeFaoite\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use DeFaoite\Core\Models\ChannelProxy;
use DeFaoite\Product\Contracts\ProductInventoryIndex as ProductInventoryIndexContract;

class ProductInventoryIndex extends Model implements ProductInventoryIndexContract
{
    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'qty',
        'product_id',
        'channel_id',
    ];

    /**
     * Get the product that owns the inventory index.
     *
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(ProductProxy::modelClass());
    }

    /**
     * Get the channel owns the inventory index.
     *
     * @return BelongsTo
     */
    public function channel()
    {
        return $this->belongsTo(ChannelProxy::modelClass());
    }
}
