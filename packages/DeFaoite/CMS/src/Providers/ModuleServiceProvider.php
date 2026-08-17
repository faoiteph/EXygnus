<?php

namespace DeFaoite\CMS\Providers;

use DeFaoite\CMS\Models\Page;
use DeFaoite\CMS\Models\PageTranslation;
use DeFaoite\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        Page::class,
        PageTranslation::class,
    ];
}
