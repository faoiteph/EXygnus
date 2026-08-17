<?php

namespace DeFaoite\User\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class RoleRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'DeFaoite\User\Contracts\Role';
    }
}
