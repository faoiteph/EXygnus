<?php

namespace DeFaoite\Attribute\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class AttributeOptionTranslationRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'DeFaoite\Attribute\Contracts\AttributeOptionTranslation';
    }
}
