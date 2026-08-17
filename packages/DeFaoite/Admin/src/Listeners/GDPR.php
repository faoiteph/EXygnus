<?php

namespace DeFaoite\Admin\Listeners;

use Illuminate\Support\Facades\Mail;
use DeFaoite\Admin\Mail\Customer\GDPR\NewRequestNotification;
use DeFaoite\Admin\Mail\Customer\GDPR\StatusUpdateNotification;
use DeFaoite\GDPR\Models\GDPRDataRequest;

class GDPR extends Base
{
    /**
     * Send mail on creating GDPR request
     *
     * @param  GDPRDataRequest  $gdprRequest
     * @return void
     */
    public function afterGdprRequestCreated($gdprRequest)
    {
        try {
            Mail::queue(new NewRequestNotification($gdprRequest));
        } catch (\Exception $e) {
            report($e);
        }
    }

    /**
     * Send mail on creating GDPR request
     *
     * @param  GDPRDataRequest  $gdprRequest
     * @return void
     */
    public function afterGdprRequestUpdated($gdprRequest)
    {
        try {
            Mail::queue(new StatusUpdateNotification($gdprRequest));
        } catch (\Exception $e) {
            report($e);
        }
    }
}
