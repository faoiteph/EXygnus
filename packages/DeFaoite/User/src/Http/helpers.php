<?php

use DeFaoite\User\Bouncer;
use DeFaoite\User\Facades\Bouncer as BouncerFacade;
use DeFaoite\User\Facades\TwoFactorAuthentication as TwoFactorAuthenticationFacade;

if (! function_exists('bouncer')) {
    /**
     * Bouncer helper.
     *
     * @return Bouncer
     */
    function bouncer()
    {
        return BouncerFacade::getFacadeRoot();
    }
}

if (! function_exists('two_factor_authentication')) {
    function two_factor_authentication()
    {
        return TwoFactorAuthenticationFacade::getFacadeRoot();
    }
}
