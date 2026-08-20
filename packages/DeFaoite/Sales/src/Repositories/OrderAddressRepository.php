<?php

namespace DeFaoite\Sales\Repositories;

use DeFaoite\Core\Eloquent\Repository;

/**
 * Order Address Repository
 *
 * @author    Jitendra Singh <jitendra@defaoite.com>
 * @copyright 2018 De Faoite Software Pvt Ltd (http://www.defaoite.com)
 */
class OrderAddressRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'DeFaoite\Sales\Contracts\OrderAddress';
    }
}
