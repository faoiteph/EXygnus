<?php

namespace DeFaoite\BookingProduct\Providers;

use DeFaoite\BookingProduct\Models\Booking;
use DeFaoite\BookingProduct\Models\BookingProduct;
use DeFaoite\BookingProduct\Models\BookingProductAppointmentSlot;
use DeFaoite\BookingProduct\Models\BookingProductDefaultSlot;
use DeFaoite\BookingProduct\Models\BookingProductEventTicket;
use DeFaoite\BookingProduct\Models\BookingProductEventTicketTranslation;
use DeFaoite\BookingProduct\Models\BookingProductRentalSlot;
use DeFaoite\BookingProduct\Models\BookingProductTableSlot;
use DeFaoite\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        BookingProduct::class,
        BookingProductDefaultSlot::class,
        BookingProductAppointmentSlot::class,
        BookingProductEventTicket::class,
        BookingProductEventTicketTranslation::class,
        BookingProductRentalSlot::class,
        BookingProductTableSlot::class,
        Booking::class,
    ];
}
