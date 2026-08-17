<?php

namespace DeFaoite\Customer\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class CustomerNoteRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'DeFaoite\Customer\Contracts\CustomerNote';
    }
}
