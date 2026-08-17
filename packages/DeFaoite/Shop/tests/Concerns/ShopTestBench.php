<?php

namespace DeFaoite\Shop\Tests\Concerns;

use DeFaoite\Customer\Contracts\Customer as CustomerContract;
use DeFaoite\Faker\Helpers\Customer as CustomerFaker;

trait ShopTestBench
{
    /**
     * Login as customer.
     */
    public function loginAsCustomer(?CustomerContract $customer = null): CustomerContract
    {
        $customer = $customer ?? (new CustomerFaker)->factory()->create();

        $this->actingAs($customer);

        return $customer;
    }
}
