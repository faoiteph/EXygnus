<?php

namespace DeFaoite\DataGrid\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\DataGrid\Models\SavedFilter;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        SavedFilter::class,
    ];
}
