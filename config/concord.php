<?php

use DeFaoite\Admin\Providers\ModuleServiceProvider;
use DeFaoite\Core\CoreConvention;

return [

    /**
     * The path of the convention file.
     */
    'convention' => CoreConvention::class,

    /**
     * Example:
     *
     * VendorA\ModuleX\Providers\ModuleServiceProvider::class,
     * VendorB\ModuleY\Providers\ModuleServiceProvider::class,
     */
    'modules' => [
        ModuleServiceProvider::class,
        DeFaoite\Attribute\Providers\ModuleServiceProvider::class,
        DeFaoite\BookingProduct\Providers\ModuleServiceProvider::class,
        DeFaoite\CMS\Providers\ModuleServiceProvider::class,
        DeFaoite\CartRule\Providers\ModuleServiceProvider::class,
        DeFaoite\CatalogRule\Providers\ModuleServiceProvider::class,
        DeFaoite\Category\Providers\ModuleServiceProvider::class,
        DeFaoite\Checkout\Providers\ModuleServiceProvider::class,
        DeFaoite\Core\Providers\ModuleServiceProvider::class,
        DeFaoite\Customer\Providers\ModuleServiceProvider::class,
        DeFaoite\DataGrid\Providers\ModuleServiceProvider::class,
        DeFaoite\DataTransfer\Providers\ModuleServiceProvider::class,
        DeFaoite\EUWithdrawal\Providers\ModuleServiceProvider::class,
        DeFaoite\GDPR\Providers\ModuleServiceProvider::class,
        DeFaoite\Inventory\Providers\ModuleServiceProvider::class,
        DeFaoite\Marketing\Providers\ModuleServiceProvider::class,
        DeFaoite\Notification\Providers\ModuleServiceProvider::class,
        DeFaoite\PayGlocal\Providers\ModuleServiceProvider::class,
        DeFaoite\PayU\Providers\ModuleServiceProvider::class,
        DeFaoite\Payment\Providers\ModuleServiceProvider::class,
        DeFaoite\Paypal\Providers\ModuleServiceProvider::class,
        DeFaoite\Product\Providers\ModuleServiceProvider::class,
        DeFaoite\Razorpay\Providers\ModuleServiceProvider::class,
        DeFaoite\RMA\Providers\ModuleServiceProvider::class,
        DeFaoite\Rule\Providers\ModuleServiceProvider::class,
        DeFaoite\Sales\Providers\ModuleServiceProvider::class,
        DeFaoite\Shipping\Providers\ModuleServiceProvider::class,
        DeFaoite\Shop\Providers\ModuleServiceProvider::class,
        DeFaoite\Sitemap\Providers\ModuleServiceProvider::class,
        DeFaoite\SocialLogin\Providers\ModuleServiceProvider::class,
        DeFaoite\Stripe\Providers\ModuleServiceProvider::class,
        DeFaoite\Tax\Providers\ModuleServiceProvider::class,
        DeFaoite\Theme\Providers\ModuleServiceProvider::class,
        DeFaoite\User\Providers\ModuleServiceProvider::class,
    ],
];
