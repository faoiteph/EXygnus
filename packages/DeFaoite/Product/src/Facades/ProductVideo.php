<?php

namespace DeFaoite\Product\Facades;

use Illuminate\Support\Facades\Facade;
use DeFaoite\Product\ProductVideo as BaseProductVideo;

class ProductVideo extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseProductVideo::class;
    }
}
