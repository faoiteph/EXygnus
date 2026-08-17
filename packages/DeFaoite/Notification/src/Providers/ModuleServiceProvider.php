<?php

namespace DeFaoite\Notification\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\Notification\Models\Notification;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        Notification::class,
    ];
}
