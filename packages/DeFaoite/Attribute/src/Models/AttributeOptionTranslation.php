<?php

namespace DeFaoite\Attribute\Models;

use Illuminate\Database\Eloquent\Model;
use DeFaoite\Attribute\Contracts\AttributeOptionTranslation as AttributeOptionTranslationContract;

class AttributeOptionTranslation extends Model implements AttributeOptionTranslationContract
{
    public $timestamps = false;

    protected $fillable = ['label'];
}
