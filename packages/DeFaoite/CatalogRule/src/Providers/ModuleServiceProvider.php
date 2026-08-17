<?php

namespace DeFaoite\CatalogRule\Providers;

use DeFaoite\CatalogRule\Models\CatalogRule;
use DeFaoite\CatalogRule\Models\CatalogRuleProduct;
use DeFaoite\CatalogRule\Models\CatalogRuleProductPrice;
use DeFaoite\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        CatalogRule::class,
        CatalogRuleProduct::class,
        CatalogRuleProductPrice::class,
    ];
}
