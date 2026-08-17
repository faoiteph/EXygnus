<?php

namespace DeFaoite\RMA\Repositories;

use DeFaoite\Core\Eloquent\Repository;
use DeFaoite\RMA\Contracts\RMAMessage;

class RMAMessageRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return RMAMessage::class;
    }
}
