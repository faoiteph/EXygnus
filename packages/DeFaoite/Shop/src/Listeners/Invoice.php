<?php

namespace DeFaoite\Shop\Listeners;

use DeFaoite\Shop\Mail\Order\InvoicedNotification;

class Invoice extends Base
{
    /**
     * After order is created
     *
     * @param  \DeFaoite\Sales\Contracts\Invoice  $invoice
     * @param  string|null  $duplicateInvoiceEmail
     * @return void
     */
    public function afterCreated($invoice, $duplicateInvoiceEmail = null)
    {
        try {
            if (! core()->getConfigData('emails.general.notifications.emails.general.notifications.new_invoice')) {
                return;
            }

            $this->prepareMail($invoice, new InvoicedNotification($invoice, $duplicateInvoiceEmail));

            $invoice->query()->update(['email_sent' => 1]);
        } catch (\Exception $e) {
            report($e);
        }
    }
}
