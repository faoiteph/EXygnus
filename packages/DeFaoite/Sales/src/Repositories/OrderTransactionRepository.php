<?php

namespace DeFaoite\Sales\Repositories;

use DeFaoite\Core\Eloquent\Repository;
use DeFaoite\Sales\Contracts\OrderTransaction;

class OrderTransactionRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return OrderTransaction::class;
    }
}
