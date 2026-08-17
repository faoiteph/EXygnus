<?php

namespace DeFaoite\EUWithdrawal\Events;

use DeFaoite\EUWithdrawal\Models\Withdrawal;

class WithdrawalReceived
{
    /**
     * Create a new event instance.
     */
    public function __construct(public Withdrawal $withdrawal) {}
}
