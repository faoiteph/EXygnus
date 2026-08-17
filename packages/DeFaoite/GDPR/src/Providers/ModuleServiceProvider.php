<?php

namespace DeFaoite\GDPR\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\GDPR\Models\GDPRDataRequest;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        GDPRDataRequest::class,
    ];
}
