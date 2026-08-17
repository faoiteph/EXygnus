<?php

namespace DeFaoite\RMA\Providers;

use Konekt\Concord\BaseModuleServiceProvider;
use DeFaoite\RMA\Models\RMA;
use DeFaoite\RMA\Models\RMAAdditionalField;
use DeFaoite\RMA\Models\RMACustomField;
use DeFaoite\RMA\Models\RMACustomFieldOption;
use DeFaoite\RMA\Models\RMAImage;
use DeFaoite\RMA\Models\RMAItem;
use DeFaoite\RMA\Models\RMAMessage;
use DeFaoite\RMA\Models\RMAReason;
use DeFaoite\RMA\Models\RMAReasonResolution;
use DeFaoite\RMA\Models\RMARule;
use DeFaoite\RMA\Models\RMAStatus;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    /**
     * Define the models provided by this module
     */
    protected $models = [
        RMA::class,
        RMAAdditionalField::class,
        RMACustomField::class,
        RMACustomFieldOption::class,
        RMAImage::class,
        RMAItem::class,
        RMAMessage::class,
        RMAReason::class,
        RMAReasonResolution::class,
        RMARule::class,
        RMAStatus::class,
    ];
}
