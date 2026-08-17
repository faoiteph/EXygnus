<?php

use App\Providers\AppServiceProvider;
use DeFaoite\Admin\Providers\AdminServiceProvider;
use DeFaoite\Attribute\Providers\AttributeServiceProvider;
use DeFaoite\BookingProduct\Providers\BookingProductServiceProvider;
use DeFaoite\CartRule\Providers\CartRuleServiceProvider;
use DeFaoite\CatalogRule\Providers\CatalogRuleServiceProvider;
use DeFaoite\Category\Providers\CategoryServiceProvider;
use DeFaoite\Checkout\Providers\CheckoutServiceProvider;
use DeFaoite\CMS\Providers\CMSServiceProvider;
use DeFaoite\Core\Providers\CoreServiceProvider;
use DeFaoite\Core\Providers\EnvValidatorServiceProvider;
use DeFaoite\Customer\Providers\CustomerServiceProvider;
use DeFaoite\DataGrid\Providers\DataGridServiceProvider;
use DeFaoite\DataTransfer\Providers\DataTransferServiceProvider;
use DeFaoite\DebugBar\Providers\DebugBarServiceProvider;
use DeFaoite\EUWithdrawal\Providers\EUWithdrawalServiceProvider;
use DeFaoite\FPC\Providers\FPCServiceProvider;
use DeFaoite\GDPR\Providers\GDPRServiceProvider;
use DeFaoite\ImageCache\Providers\ImageCacheServiceProvider;
use DeFaoite\Installer\Providers\InstallerServiceProvider;
use DeFaoite\Inventory\Providers\InventoryServiceProvider;
use DeFaoite\MagicAI\Providers\MagicAIServiceProvider;
use DeFaoite\Marketing\Providers\MarketingServiceProvider;
use DeFaoite\Notification\Providers\NotificationServiceProvider;
use DeFaoite\PayGlocal\Providers\PayGlocalServiceProvider;
use DeFaoite\Payment\Providers\PaymentServiceProvider;
use DeFaoite\Paypal\Providers\PaypalServiceProvider;
use DeFaoite\PayU\Providers\PayUServiceProvider;
use DeFaoite\PhonePe\Providers\PhonePeServiceProvider;
use DeFaoite\Product\Providers\ProductServiceProvider;
use DeFaoite\Razorpay\Providers\RazorpayServiceProvider;
use DeFaoite\RMA\Providers\RMAServiceProvider;
use DeFaoite\Rule\Providers\RuleServiceProvider;
use DeFaoite\Sales\Providers\SalesServiceProvider;
use DeFaoite\Shipping\Providers\ShippingServiceProvider;
use DeFaoite\Shop\Providers\ShopServiceProvider;
use DeFaoite\Sitemap\Providers\SitemapServiceProvider;
use DeFaoite\SocialLogin\Providers\SocialLoginServiceProvider;
use DeFaoite\SocialShare\Providers\SocialShareServiceProvider;
use DeFaoite\Stripe\Providers\StripeServiceProvider;
use DeFaoite\Tax\Providers\TaxServiceProvider;
use DeFaoite\Theme\Providers\ThemeServiceProvider;
use DeFaoite\User\Providers\UserServiceProvider;

return [
    /**
     * Application service providers.
     */
    AppServiceProvider::class,

    /**
     * Webkul's service providers.
     */
    AdminServiceProvider::class,
    AttributeServiceProvider::class,
    BookingProductServiceProvider::class,
    CMSServiceProvider::class,
    CartRuleServiceProvider::class,
    CatalogRuleServiceProvider::class,
    CategoryServiceProvider::class,
    CheckoutServiceProvider::class,
    CoreServiceProvider::class,
    EnvValidatorServiceProvider::class,
    CustomerServiceProvider::class,
    DataGridServiceProvider::class,
    DataTransferServiceProvider::class,
    DebugBarServiceProvider::class,
    EUWithdrawalServiceProvider::class,
    FPCServiceProvider::class,
    GDPRServiceProvider::class,
    ImageCacheServiceProvider::class,
    InstallerServiceProvider::class,
    InventoryServiceProvider::class,
    MagicAIServiceProvider::class,
    MarketingServiceProvider::class,
    NotificationServiceProvider::class,
    PayGlocalServiceProvider::class,
    PayUServiceProvider::class,
    PaymentServiceProvider::class,
    PaypalServiceProvider::class,
    PhonePeServiceProvider::class,
    ProductServiceProvider::class,
    RMAServiceProvider::class,
    RazorpayServiceProvider::class,
    RuleServiceProvider::class,
    SalesServiceProvider::class,
    ShippingServiceProvider::class,
    ShopServiceProvider::class,
    SitemapServiceProvider::class,
    SocialLoginServiceProvider::class,
    SocialShareServiceProvider::class,
    StripeServiceProvider::class,
    TaxServiceProvider::class,
    ThemeServiceProvider::class,
    UserServiceProvider::class,
];
