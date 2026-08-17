<?php

namespace DeFaoite\Product\Models;

use Illuminate\Database\Eloquent\Model;
use DeFaoite\Product\Contracts\ProductCustomizableOptionTranslation as ProductCustomizableOptionTranslationContract;

class ProductCustomizableOptionTranslation extends Model implements ProductCustomizableOptionTranslationContract
{
    /**
     * Set timestamp false.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Set fillable property to the model.
     *
     * @var array
     */
    protected $fillable = ['label'];
}
