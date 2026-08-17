<?php

namespace DeFaoite\Inventory\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class InventorySourceRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'DeFaoite\Inventory\Contracts\InventorySource';
    }
}
