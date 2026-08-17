<?php

namespace DeFaoite\Admin\Tests;

use Tests\TestCase;
use DeFaoite\Admin\Tests\Concerns\AdminTestBench;
use DeFaoite\Core\Tests\Concerns\CoreAssertions;

class AdminTestCase extends TestCase
{
    use AdminTestBench, CoreAssertions;
}
