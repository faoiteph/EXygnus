<?php

namespace DeFaoite\Admin\Tests\Concerns;

use DeFaoite\User\Contracts\Admin as AdminContract;
use DeFaoite\User\Models\Admin as AdminModel;

trait AdminTestBench
{
    /**
     * Login as customer.
     */
    public function loginAsAdmin(?AdminContract $admin = null): AdminContract
    {
        $admin = $admin ?? AdminModel::factory()->create();

        $this->actingAs($admin, 'admin');

        return $admin;
    }
}
