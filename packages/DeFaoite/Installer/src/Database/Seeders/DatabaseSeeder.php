<?php

namespace DeFaoite\Installer\Database\Seeders;

use Illuminate\Database\Seeder;
use DeFaoite\Installer\Database\Seeders\Attribute\DatabaseSeeder as AttributeSeeder;
use DeFaoite\Installer\Database\Seeders\Category\DatabaseSeeder as CategorySeeder;
use DeFaoite\Installer\Database\Seeders\CMS\DatabaseSeeder as CMSSeeder;
use DeFaoite\Installer\Database\Seeders\Core\DatabaseSeeder as CoreSeeder;
use DeFaoite\Installer\Database\Seeders\Customer\DatabaseSeeder as CustomerSeeder;
use DeFaoite\Installer\Database\Seeders\Inventory\DatabaseSeeder as InventorySeeder;
use DeFaoite\Installer\Database\Seeders\RMA\DatabaseSeeder as RMASeeder;
use DeFaoite\Installer\Database\Seeders\Shop\ThemeCustomizationTableSeeder as ShopSeeder;
use DeFaoite\Installer\Database\Seeders\SocialLogin\DatabaseSeeder as SocialLoginSeeder;
use DeFaoite\Installer\Database\Seeders\User\DatabaseSeeder as UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run($parameters = [])
    {
        $this->call(AttributeSeeder::class, false, ['parameters' => $parameters]);

        $this->call(CategorySeeder::class, false, ['parameters' => $parameters]);

        $this->call(CoreSeeder::class, false, ['parameters' => $parameters]);

        $this->call(CustomerSeeder::class, false, ['parameters' => $parameters]);

        $this->call(CMSSeeder::class, false, ['parameters' => $parameters]);

        $this->call(InventorySeeder::class, false, ['parameters' => $parameters]);

        $this->call(SocialLoginSeeder::class, false, ['parameters' => $parameters]);

        $this->call(ShopSeeder::class, false, ['parameters' => $parameters]);

        $this->call(UserSeeder::class, false, ['parameters' => $parameters]);

        $this->call(RMASeeder::class, false, ['parameters' => $parameters]);
    }
}
