<?php

namespace DeFaoite\CatalogRule\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class CatalogRuleProductRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'DeFaoite\CatalogRule\Contracts\CatalogRuleProduct';
    }
}
