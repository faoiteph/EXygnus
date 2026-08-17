<?php

namespace DeFaoite\Category\Providers;

use DeFaoite\Category\Models\Category;
use DeFaoite\Category\Models\CategoryTranslation;
use DeFaoite\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        Category::class,
        CategoryTranslation::class,
    ];
}
