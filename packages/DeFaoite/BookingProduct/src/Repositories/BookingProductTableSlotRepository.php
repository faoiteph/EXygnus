<?php

namespace DeFaoite\BookingProduct\Repositories;

use DeFaoite\BookingProduct\Contracts\BookingProductTableSlot;
use DeFaoite\Core\Eloquent\Repository;

class BookingProductTableSlotRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return BookingProductTableSlot::class;
    }
}
