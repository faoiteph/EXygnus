<?php

namespace DeFaoite\Customer\Facades;

use Illuminate\Support\Facades\Facade;
use DeFaoite\Customer\Captcha as BaseCaptcha;

class Captcha extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseCaptcha::class;
    }
}
