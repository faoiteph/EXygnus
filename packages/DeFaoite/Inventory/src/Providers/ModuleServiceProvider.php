<?php

namespace DeFaoite\Inventory\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\Inventory\Models\InventorySource;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        InventorySource::class,
    ];
}
