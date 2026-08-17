<?php

namespace DeFaoite\BookingProduct\Repositories;

use DeFaoite\BookingProduct\Contracts\BookingProductAppointmentSlot;
use DeFaoite\Core\Eloquent\Repository;

class BookingProductAppointmentSlotRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return BookingProductAppointmentSlot::class;
    }
}
