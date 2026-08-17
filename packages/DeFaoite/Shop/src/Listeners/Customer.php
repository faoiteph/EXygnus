<?php

namespace DeFaoite\Shop\Listeners;

use Illuminate\Support\Facades\Mail;
use DeFaoite\Customer\Models\CustomerNote;
use DeFaoite\Shop\Mail\Customer\EmailVerificationNotification;
use DeFaoite\Shop\Mail\Customer\NoteNotification;
use DeFaoite\Shop\Mail\Customer\RegistrationNotification;
use DeFaoite\Shop\Mail\Customer\SubscriptionNotification;
use DeFaoite\Shop\Mail\Customer\UpdatePasswordNotification;

class Customer extends Base
{
    /**
     * After customer is created
     *
     * @param  \DeFaoite\Customer\Contracts\Customer  $customer
     * @return void
     */
    public function afterCreated($customer)
    {
        if (core()->getConfigData('customer.settings.email.verification')) {
            try {
                if (! core()->getConfigData('customer.settings.email.verification')) {
                    return;
                }

                Mail::queue(new EmailVerificationNotification($customer));
            } catch (\Exception $e) {
                \Log::info('EmailVerificationNotification Error');

                report($e);
            }

            return;
        }

        try {
            if (! core()->getConfigData('emails.general.notifications.emails.general.notifications.registration')) {
                return;
            }

            Mail::queue(new RegistrationNotification($customer));
        } catch (\Exception $e) {
            report($e);
        }
    }

    /**
     * Send mail on updating password.
     *
     * @param  \DeFaoite\Customer\Models\Customer  $customer
     * @return void
     */
    public function afterPasswordUpdated($customer)
    {
        try {
            Mail::queue(new UpdatePasswordNotification($customer));
        } catch (\Exception $e) {
            report($e);
        }
    }

    /**
     * Send mail on subscribe
     *
     * @param  \DeFaoite\Customer\Models\Customer  $customer
     * @return void
     */
    public function afterSubscribed($customer)
    {
        try {
            Mail::queue(new SubscriptionNotification($customer));
        } catch (\Exception $e) {
            report($e);
        }
    }

    /**
     * Send mail on creating Note
     *
     * @param  CustomerNote  $note
     * @return void
     */
    public function afterNoteCreated($note)
    {
        if (! $note->customer_notified) {
            return;
        }

        try {
            Mail::queue(new NoteNotification($note));
        } catch (\Exception $e) {
            session()->flash('warning', $e->getMessage());
        }
    }
}
