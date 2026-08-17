<?php

use DeFaoite\Admin\Tests\AdminTestCase;
use DeFaoite\Core\Tests\CoreTestCase;
use DeFaoite\Customer\Tests\CustomerTestCase;
use DeFaoite\DataGrid\Tests\DataGridTestCase;
use DeFaoite\EUWithdrawal\Tests\EUWithdrawalTestCase;
use DeFaoite\Installer\Tests\InstallerTestCase;
use DeFaoite\PayGlocal\Tests\PayGlocalTestCase;
use DeFaoite\Payment\Tests\PaymentTestCase;
use DeFaoite\PayU\Tests\PayUTestCase;
use DeFaoite\Razorpay\Tests\RazorpayTestCase;
use DeFaoite\Shop\Tests\ShopTestCase;
use DeFaoite\Stripe\Tests\StripeTestCase;

ini_set('memory_limit', '1024M');

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "uses()" function to bind a different classes or traits.
|
*/

uses(AdminTestCase::class)->in('../packages/DeFaoite/Admin/tests');
uses(CoreTestCase::class)->in('../packages/DeFaoite/Core/tests');
uses(CustomerTestCase::class)->in('../packages/DeFaoite/Customer/tests');
uses(DataGridTestCase::class)->in('../packages/DeFaoite/DataGrid/tests');
uses(EUWithdrawalTestCase::class)->in('../packages/DeFaoite/EUWithdrawal/tests');
uses(InstallerTestCase::class)->in('../packages/DeFaoite/Installer/tests');
uses(PayGlocalTestCase::class)->in('../packages/DeFaoite/PayGlocal/tests');
uses(PaymentTestCase::class)->in('../packages/DeFaoite/Payment/tests');
uses(PayUTestCase::class)->in('../packages/DeFaoite/PayU/tests');
uses(RazorpayTestCase::class)->in('../packages/DeFaoite/Razorpay/tests');
uses(ShopTestCase::class)->in('../packages/DeFaoite/Shop/tests');
uses(StripeTestCase::class)->in('../packages/DeFaoite/Stripe/tests');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/

function something()
{
    // ..
}
