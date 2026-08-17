<?php

namespace DeFaoite\Marketing\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\Marketing\Models\Campaign;
use DeFaoite\Marketing\Models\Event;
use DeFaoite\Marketing\Models\SearchSynonym;
use DeFaoite\Marketing\Models\SearchTerm;
use DeFaoite\Marketing\Models\Template;
use DeFaoite\Marketing\Models\URLRewrite;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        Campaign::class,
        Event::class,
        SearchSynonym::class,
        SearchTerm::class,
        Template::class,
        URLRewrite::class,
    ];
}
