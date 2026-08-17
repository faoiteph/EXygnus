<?php

namespace DeFaoite\Core\Facades;

use Illuminate\Support\Facades\Facade;
use DeFaoite\Core\Menu as BaseMenu;

class Menu extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseMenu::class;
    }
}
