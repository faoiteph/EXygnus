<?php

namespace DeFaoite\RMA\Repositories;

use DeFaoite\Core\Eloquent\Repository;
use DeFaoite\RMA\Contracts\RMACustomField;

class RMACustomFieldRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return RMACustomField::class;
    }
}
