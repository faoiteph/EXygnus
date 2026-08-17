<?php

namespace DeFaoite\Tax\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\Tax\Models\TaxCategory;
use DeFaoite\Tax\Models\TaxMap;
use DeFaoite\Tax\Models\TaxRate;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        TaxCategory::class,
        TaxMap::class,
        TaxRate::class,
    ];
}
