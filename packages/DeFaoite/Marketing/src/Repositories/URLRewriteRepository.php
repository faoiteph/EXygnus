<?php

namespace DeFaoite\Marketing\Repositories;

use DeFaoite\Core\Eloquent\Repository;

class URLRewriteRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'DeFaoite\Marketing\Contracts\URLRewrite';
    }
}
