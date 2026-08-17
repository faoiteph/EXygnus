<?php

namespace DeFaoite\Core\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use DeFaoite\Core\Models\CoreConfig;

class CoreConfigFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CoreConfig::class;

    /**
     * Define the model's default state.
     *
     * @throws \Exception
     */
    public function definition(): array
    {
        return [];
    }
}
