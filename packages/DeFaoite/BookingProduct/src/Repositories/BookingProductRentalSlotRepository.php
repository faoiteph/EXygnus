<?php

namespace DeFaoite\BookingProduct\Repositories;

use DeFaoite\BookingProduct\Contracts\BookingProductRentalSlot;
use DeFaoite\Core\Eloquent\Repository;

class BookingProductRentalSlotRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return BookingProductRentalSlot::class;
    }
}
