<?php

namespace DeFaoite\RMA\Repositories;

use DeFaoite\Core\Eloquent\Repository;
use DeFaoite\RMA\Contracts\RMAItem;

class RMAItemRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return RMAItem::class;
    }
}
