<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DeFaoite\Installer\Database\Seeders\DatabaseSeeder as EXygnusDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EXygnusDatabaseSeeder::class);
    }
}
