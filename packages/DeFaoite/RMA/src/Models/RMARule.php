<?php

namespace DeFaoite\RMA\Models;

use Illuminate\Database\Eloquent\Model;
use DeFaoite\RMA\Contracts\RMARule as RMARuleContract;

class RMARule extends Model implements RMARuleContract
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rma_rules';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'status',
        'return_period',
        'default',
    ];
}
