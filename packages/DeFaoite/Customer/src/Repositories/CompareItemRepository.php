<?php

namespace DeFaoite\Customer\Repositories;

use DeFaoite\Core\Eloquent\Repository;
use DeFaoite\Customer\Contracts\CompareItem;

class CompareItemRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return CompareItem::class;
    }
}
