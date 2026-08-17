<?php

namespace DeFaoite\CartRule\Providers;

use DeFaoite\CartRule\Models\CartRule;
use DeFaoite\CartRule\Models\CartRuleCoupon;
use DeFaoite\CartRule\Models\CartRuleCouponUsage;
use DeFaoite\CartRule\Models\CartRuleCustomer;
use DeFaoite\CartRule\Models\CartRuleTranslation;
use DeFaoite\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        CartRule::class,
        CartRuleCoupon::class,
        CartRuleCouponUsage::class,
        CartRuleCustomer::class,
        CartRuleTranslation::class,
    ];
}
