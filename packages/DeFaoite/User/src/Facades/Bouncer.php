<?php

namespace DeFaoite\User\Facades;

use Illuminate\Support\Facades\Facade;
use DeFaoite\User\Bouncer as BaseBouncer;

class Bouncer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseBouncer::class;
    }
}
