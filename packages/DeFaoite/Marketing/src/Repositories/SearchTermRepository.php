<?php

namespace DeFaoite\Marketing\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class SearchTermRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'DeFaoite\Marketing\Contracts\SearchTerm';
    }
}
