<?php

namespace DeFaoite\BookingProduct\Helpers;

use DeFaoite\BookingProduct\Contracts\BookingProduct;

class AppointmentSlot extends Booking
{
    /**
     * @param  BookingProduct  $bookingProduct
     */
    public function haveSufficientQuantity(int $qty, $bookingProduct): bool
    {
        return true;
    }
}
