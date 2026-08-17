<?php

namespace DeFaoite\EUWithdrawal\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\EUWithdrawal\Models\Withdrawal;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models registered with Concord for this module.
     *
     * @var class-string[]
     */
    protected $models = [
        Withdrawal::class,
    ];
}
