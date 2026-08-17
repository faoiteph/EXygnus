<?php

namespace DeFaoite\DataGrid\Repositories;

use DeFaoite\Core\Eloquent\Repository;
use DeFaoite\DataGrid\Contracts\SavedFilter;

class SavedFilterRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return SavedFilter::class;
    }
}
