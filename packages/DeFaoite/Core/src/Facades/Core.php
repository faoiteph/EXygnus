<?php

namespace DeFaoite\Core\Facades;

use Illuminate\Support\Facades\Facade;
use DeFaoite\Core\Core as BaseCore;

class Core extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseCore::class;
    }
}
