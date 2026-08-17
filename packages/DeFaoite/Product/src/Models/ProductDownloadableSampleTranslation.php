<?php

namespace DeFaoite\Product\Models;

use Illuminate\Database\Eloquent\Model;
use DeFaoite\Product\Contracts\ProductDownloadableSampleTranslation as ProductDownloadableSampleTranslationContract;

class ProductDownloadableSampleTranslation extends Model implements ProductDownloadableSampleTranslationContract
{
    public $timestamps = false;

    protected $fillable = ['title'];
}
