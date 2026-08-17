<?php

namespace DeFaoite\RMA\Repositories;

use DeFaoite\Core\Eloquent\Repository;
use DeFaoite\RMA\Contracts\RMAStatus;

class RMAStatusRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return RMAStatus::class;
    }
}
