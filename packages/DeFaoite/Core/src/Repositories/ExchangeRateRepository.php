<?php

namespace DeFaoite\Core\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class ExchangeRateRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'DeFaoite\Core\Contracts\CurrencyExchangeRate';
    }
}
