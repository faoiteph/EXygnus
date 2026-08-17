<?php

namespace DeFaoite\Sitemap\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\Sitemap\Models\Sitemap;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        Sitemap::class,
    ];
}
