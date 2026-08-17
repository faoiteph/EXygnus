<?php

namespace DeFaoite\Core\Providers;

use DeFaoite\Core\Models\Channel;
use DeFaoite\Core\Models\CoreConfig;
use DeFaoite\Core\Models\Country;
use DeFaoite\Core\Models\CountryState;
use DeFaoite\Core\Models\CountryStateTranslation;
use DeFaoite\Core\Models\CountryTranslation;
use DeFaoite\Core\Models\Currency;
use DeFaoite\Core\Models\CurrencyExchangeRate;
use DeFaoite\Core\Models\Locale;
use DeFaoite\Core\Models\SubscribersList;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        Channel::class,
        CoreConfig::class,
        Country::class,
        CountryState::class,
        CountryStateTranslation::class,
        CountryTranslation::class,
        Currency::class,
        CurrencyExchangeRate::class,
        Locale::class,
        SubscribersList::class,
    ];
}
