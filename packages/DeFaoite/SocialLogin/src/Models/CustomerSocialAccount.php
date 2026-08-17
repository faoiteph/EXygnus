<?php

namespace DeFaoite\SocialLogin\Models;

use Illuminate\Database\Eloquent\Model;
use DeFaoite\Customer\Models\CustomerProxy;
use DeFaoite\SocialLogin\Contracts\CustomerSocialAccount as CustomerSocialAccountContract;

class CustomerSocialAccount extends Model implements CustomerSocialAccountContract
{
    protected $fillable = [
        'customer_id',
        'provider_name',
        'provider_id',
    ];

    /**
     * Get the customer that belongs to the social aoount.
     */
    public function customer()
    {
        return $this->belongsTo(CustomerProxy::modelClass());
    }
}
