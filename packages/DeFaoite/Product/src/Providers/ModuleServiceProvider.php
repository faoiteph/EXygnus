<?php

namespace DeFaoite\Product\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\Product\Models\Product;
use DeFaoite\Product\Models\ProductAttributeValue;
use DeFaoite\Product\Models\ProductBundleOption;
use DeFaoite\Product\Models\ProductBundleOptionProduct;
use DeFaoite\Product\Models\ProductBundleOptionTranslation;
use DeFaoite\Product\Models\ProductCustomerGroupPrice;
use DeFaoite\Product\Models\ProductCustomizableOption;
use DeFaoite\Product\Models\ProductCustomizableOptionPrice;
use DeFaoite\Product\Models\ProductCustomizableOptionTranslation;
use DeFaoite\Product\Models\ProductDownloadableLink;
use DeFaoite\Product\Models\ProductDownloadableSample;
use DeFaoite\Product\Models\ProductFlat;
use DeFaoite\Product\Models\ProductGroupedProduct;
use DeFaoite\Product\Models\ProductImage;
use DeFaoite\Product\Models\ProductInventory;
use DeFaoite\Product\Models\ProductInventoryIndex;
use DeFaoite\Product\Models\ProductOrderedInventory;
use DeFaoite\Product\Models\ProductPriceIndex;
use DeFaoite\Product\Models\ProductReview;
use DeFaoite\Product\Models\ProductReviewAttachment;
use DeFaoite\Product\Models\ProductSalableInventory;
use DeFaoite\Product\Models\ProductVideo;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        Product::class,
        ProductAttributeValue::class,
        ProductBundleOption::class,
        ProductBundleOptionProduct::class,
        ProductBundleOptionTranslation::class,
        ProductCustomerGroupPrice::class,
        ProductCustomizableOption::class,
        ProductCustomizableOptionPrice::class,
        ProductCustomizableOptionTranslation::class,
        ProductDownloadableLink::class,
        ProductDownloadableSample::class,
        ProductFlat::class,
        ProductGroupedProduct::class,
        ProductImage::class,
        ProductInventory::class,
        ProductInventoryIndex::class,
        ProductOrderedInventory::class,
        ProductPriceIndex::class,
        ProductReview::class,
        ProductReviewAttachment::class,
        ProductSalableInventory::class,
        ProductVideo::class,
    ];
}
