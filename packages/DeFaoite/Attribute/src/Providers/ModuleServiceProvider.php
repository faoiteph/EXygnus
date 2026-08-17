<?php

namespace DeFaoite\Attribute\Providers;

use DeFaoite\Attribute\Models\Attribute;
use DeFaoite\Attribute\Models\AttributeFamily;
use DeFaoite\Attribute\Models\AttributeGroup;
use DeFaoite\Attribute\Models\AttributeOption;
use DeFaoite\Attribute\Models\AttributeOptionTranslation;
use DeFaoite\Attribute\Models\AttributeTranslation;
use DeFaoite\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        Attribute::class,
        AttributeFamily::class,
        AttributeGroup::class,
        AttributeOption::class,
        AttributeOptionTranslation::class,
        AttributeTranslation::class,
    ];
}
