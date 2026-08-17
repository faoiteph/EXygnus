<?php

namespace DeFaoite\Shop\Listeners;

use Illuminate\Support\Facades\Mail;
use DeFaoite\Sales\Contracts\OrderComment;

class Base
{
    /**
     * Get the locale of the customer if somehow item name changes then the english locale will pe provided.
     *
     * @param object \DeFaoite\Sales\Contracts\Order|\DeFaoite\Sales\Contracts\Invoice|\DeFaoite\Sales\Contracts\Refund|\DeFaoite\Sales\Contracts\Shipment|\DeFaoite\Sales\Contracts\OrderComment
     * @return string
     */
    protected function getLocale($object)
    {
        if ($object instanceof OrderComment) {
            $object = $object->order;
        }

        $objectFirstItem = $object->items->first();

        return $objectFirstItem->additional['locale'] ?? 'en';
    }

    /**
     * Prepare mail.
     *
     * @return void
     */
    protected function prepareMail($entity, $notification)
    {
        $customerLocale = $this->getLocale($entity);

        $previousLocale = core()->getCurrentLocale()->code;

        app()->setLocale($customerLocale);

        try {
            Mail::queue($notification);
        } catch (\Exception $e) {
            \Log::error('Error in Sending Email'.$e->getMessage());
        }

        app()->setLocale($previousLocale);
    }
}
