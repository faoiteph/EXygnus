<?php

namespace DeFaoite\RMA\Repositories;

use DeFaoite\Core\Eloquent\Repository;
use DeFaoite\RMA\Contracts\RMAReasonResolution;

class RMAReasonResolutionRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return RMAReasonResolution::class;
    }
}
