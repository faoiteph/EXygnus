<?php

namespace DeFaoite\DataTransfer\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\DataTransfer\Models\Import;
use DeFaoite\DataTransfer\Models\ImportBatch;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        Import::class,
        ImportBatch::class,
    ];
}
