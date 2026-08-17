<?php

namespace DeFaoite\BookingProduct\Models;

use Illuminate\Database\Eloquent\Model;
use DeFaoite\BookingProduct\Contracts\Booking as BookingContract;
use DeFaoite\Sales\Models\OrderItemProxy;
use DeFaoite\Sales\Models\OrderProxy;

class Booking extends Model implements BookingContract
{
    /**
     * Indicates if the model should be timestamped.
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'qty',
        'from',
        'to',
        'allow_cancellation',
        'order_item_id',
        'booking_product_event_ticket_id',
        'product_id',
        'order_id',
    ];

    /**
     * Get the order record associated with the order item.
     */
    public function order()
    {
        return $this->belongsTo(OrderProxy::modelClass());
    }

    /**
     * Get the order item record associated with this booking.
     */
    public function order_item()
    {
        return $this->belongsTo(OrderItemProxy::modelClass());
    }
}
