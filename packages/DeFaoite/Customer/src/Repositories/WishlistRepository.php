<?php

namespace DeFaoite\Customer\Repositories;

use DeFaoite\Core\Eloquent\Repository;
use DeFaoite\Customer\Contracts\Wishlist;

class WishlistRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return Wishlist::class;
    }
}
