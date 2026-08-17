<?php

namespace DeFaoite\Marketing\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class TemplateRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'DeFaoite\Marketing\Contracts\Template';
    }
}
