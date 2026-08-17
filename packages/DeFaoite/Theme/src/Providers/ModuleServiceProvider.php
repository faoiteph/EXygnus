<?php

namespace DeFaoite\Theme\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\Theme\Models\ThemeCustomization;
use DeFaoite\Theme\Models\ThemeCustomizationTranslation;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Define the models
     *
     * @var array
     */
    protected $models = [
        ThemeCustomization::class,
        ThemeCustomizationTranslation::class,
    ];
}
