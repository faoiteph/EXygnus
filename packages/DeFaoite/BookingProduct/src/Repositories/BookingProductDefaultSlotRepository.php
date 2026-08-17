<?php

namespace DeFaoite\BookingProduct\Repositories;

use DeFaoite\BookingProduct\Contracts\BookingProductDefaultSlot;
use DeFaoite\Core\Eloquent\Repository;

class BookingProductDefaultSlotRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return BookingProductDefaultSlot::class;
    }
}
