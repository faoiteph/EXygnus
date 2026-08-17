<?php

namespace DeFaoite\SocialLogin\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\SocialLogin\Models\CustomerSocialAccount;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        CustomerSocialAccount::class,
    ];
}
