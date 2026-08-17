<?php

namespace DeFaoite\Sales\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class OrderCommentRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'DeFaoite\Sales\Contracts\OrderComment';
    }
}
