<?php

namespace DeFaoite\User\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\User\Models\Admin;
use DeFaoite\User\Models\Role;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        Admin::class,
        Role::class,
    ];
}
