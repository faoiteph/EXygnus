<?php

namespace DeFaoite\Shop\Tests;

use Tests\TestCase;
use DeFaoite\Core\Tests\Concerns\CoreAssertions;
use DeFaoite\Shop\Tests\Concerns\ShopTestBench;

class ShopTestCase extends TestCase
{
    use CoreAssertions, ShopTestBench;
}
