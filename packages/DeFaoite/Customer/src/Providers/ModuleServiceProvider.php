<?php

namespace DeFaoite\Customer\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\Customer\Models\CompareItem;
use DeFaoite\Customer\Models\Customer;
use DeFaoite\Customer\Models\CustomerAddress;
use DeFaoite\Customer\Models\CustomerGroup;
use DeFaoite\Customer\Models\CustomerNote;
use DeFaoite\Customer\Models\Wishlist;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        CompareItem::class,
        Customer::class,
        CustomerAddress::class,
        CustomerGroup::class,
        CustomerNote::class,
        Wishlist::class,
    ];
}
