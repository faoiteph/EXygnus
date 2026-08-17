<?php

namespace DeFaoite\Core\Facades;

use Illuminate\Support\Facades\Facade;
use DeFaoite\Core\Acl as BaseAcl;

class Acl extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseAcl::class;
    }
}
