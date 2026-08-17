<?php

namespace DeFaoite\FPC\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use DeFaoite\FPC\Listeners\Category;
use DeFaoite\FPC\Listeners\Channel;
use DeFaoite\FPC\Listeners\CoreConfig;
use DeFaoite\FPC\Listeners\Order;
use DeFaoite\FPC\Listeners\Page;
use DeFaoite\FPC\Listeners\Product;
use DeFaoite\FPC\Listeners\Refund;
use DeFaoite\FPC\Listeners\Review;
use DeFaoite\FPC\Listeners\ThemeCustomization;
use DeFaoite\FPC\Listeners\URLRewrite;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        /**
         * Catalog events.
         */
        'catalog.product.update.after' => [
            [Product::class, 'afterUpdate'],
        ],

        'catalog.product.delete.before' => [
            [Product::class, 'beforeDelete'],
        ],

        'catalog.category.update.after' => [
            [Category::class, 'afterUpdate'],
        ],

        'catalog.category.delete.before' => [
            [Category::class, 'beforeDelete'],
        ],

        /**
         * Customer events.
         */
        'customer.review.update.after' => [
            [Review::class, 'afterUpdate'],
        ],

        'customer.review.delete.before' => [
            [Review::class, 'beforeDelete'],
        ],

        /**
         * Sales events.
         */
        'checkout.order.save.after' => [
            [Order::class, 'afterCancelOrCreate'],
        ],

        'sales.order.cancel.after' => [
            [Order::class, 'afterCancelOrCreate'],
        ],

        'sales.refund.save.after' => [
            [Refund::class, 'afterCreate'],
        ],

        /**
         * CMS events.
         */
        'cms.page.update.after' => [
            [Page::class, 'afterUpdate'],
        ],

        'cms.page.delete.before' => [
            [Page::class, 'beforeDelete'],
        ],

        /**
         * Theme events.
         */
        'theme_customization.create.after' => [
            [ThemeCustomization::class, 'afterCreate'],
        ],

        'theme_customization.update.after' => [
            [ThemeCustomization::class, 'afterUpdate'],
        ],

        'theme_customization.delete.before' => [
            [ThemeCustomization::class, 'beforeDelete'],
        ],

        /**
         * Core events.
         */
        'core.channel.update.after' => [
            [Channel::class, 'afterUpdate'],
        ],

        'core.configuration.save.after' => [
            [CoreConfig::class, 'afterUpdate'],
        ],

        /**
         * Marketing events.
         */
        'marketing.search_seo.url_rewrites.update.after' => [
            [URLRewrite::class, 'afterUpdate'],
        ],

        'marketing.search_seo.url_rewrites.delete.before' => [
            [URLRewrite::class, 'beforeDelete'],
        ],
    ];
}
