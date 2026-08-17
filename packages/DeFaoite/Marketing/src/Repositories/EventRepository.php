<?php

namespace DeFaoite\Marketing\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class EventRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'DeFaoite\Marketing\Contracts\Event';
    }
}
