<?php

namespace DeFaoite\CartRule\Models;

use Illuminate\Database\Eloquent\Model;
use DeFaoite\CartRule\Contracts\CartRuleCouponUsage as CartRuleCouponUsageContract;

class CartRuleCouponUsage extends Model implements CartRuleCouponUsageContract
{
    public $timestamps = false;

    protected $table = 'cart_rule_coupon_usage';

    protected $guarded = [
        'created_at',
        'updated_at',
    ];
}
