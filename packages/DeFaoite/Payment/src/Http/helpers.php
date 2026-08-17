<?php

use DeFaoite\Payment\Facades\Payment;

if (! function_exists('payment')) {
    /**
     * Payment helper.
     *
     * @return DeFaoite\Payment\Payment
     */
    function payment()
    {
        return Payment::getFacadeRoot();
    }
}
