<?php

namespace DeFaoite\CatalogRule\Listeners;

use DeFaoite\CatalogRule\Jobs\DeleteCatalogRuleIndex as DeleteCatalogRuleIndexJob;
use DeFaoite\CatalogRule\Jobs\UpdateCreateCatalogRuleIndex as UpdateCreateCatalogRuleIndexJob;
use DeFaoite\CatalogRule\Repositories\CatalogRuleProductPriceRepository;
use DeFaoite\CatalogRule\Repositories\CatalogRuleRepository;

class CatalogRule
{
    /**
     * Create a new listener instance.
     *
     * @return void
     */
    public function __construct(
        protected CatalogRuleRepository $catalogRuleRepository,
        protected CatalogRuleProductPriceRepository $catalogRuleProductPriceRepository
    ) {}

    /**
     * @param  \DeFaoite\CatalogRule\Contracts\CatalogRule  $catalogRule
     * @return void
     */
    public function afterUpdateCreate($catalogRule)
    {
        UpdateCreateCatalogRuleIndexJob::dispatch($catalogRule);
    }

    /**
     * @param  int  $catalogRuleId
     * @return void
     */
    public function beforeUpdate($catalogRuleId)
    {
        $catalogRule = $this->catalogRuleRepository->find($catalogRuleId);

        $productIds = $catalogRule->catalog_rule_products->pluck('product_id')->unique();

        $this->catalogRuleProductPriceRepository->deleteWhere(['catalog_rule_id' => $catalogRuleId]);

        DeleteCatalogRuleIndexJob::dispatch($productIds->toArray());
    }

    /**
     * @param  int  $catalogRuleId
     * @return void
     */
    public function beforeDelete($catalogRuleId)
    {
        $catalogRule = $this->catalogRuleRepository->find($catalogRuleId);

        $productIds = $catalogRule->catalog_rule_products->pluck('product_id')->unique();

        $this->catalogRuleProductPriceRepository->deleteWhere(['catalog_rule_id' => $catalogRuleId]);

        DeleteCatalogRuleIndexJob::dispatch($productIds->toArray());
    }
}
