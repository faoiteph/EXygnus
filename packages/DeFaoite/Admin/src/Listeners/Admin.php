<?php

namespace DeFaoite\Admin\Listeners;

class Admin
{
    /**
     * Send mail on updating password.
     *
     * @param  \DeFaoite\User\Models\Admin  $admin
     * @return void
     */
    public function afterPasswordUpdated($admin) {}
}
