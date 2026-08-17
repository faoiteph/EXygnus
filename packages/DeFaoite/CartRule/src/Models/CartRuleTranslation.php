<?php

namespace DeFaoite\CartRule\Models;

use Illuminate\Database\Eloquent\Model;
use DeFaoite\CartRule\Contracts\CartRuleTranslation as CartRuleTranslationContract;

class CartRuleTranslation extends Model implements CartRuleTranslationContract
{
    public $timestamps = false;

    protected $fillable = ['label'];
}
