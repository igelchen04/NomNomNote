<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => ucfirst($this->faker->unique()->words(3, true)),
            'image' => $this->faker->imageUrl(640, 480, 'products', true),
            'description' => $this->faker->paragraph,
            'average_price' => $this->faker->randomFloat(2, 5, 1000),
            'brand' => $this->faker->company,
            'created_by' => User::inRandomOrder()->first()?->id ?? User::factory(),
        ];
    }
}
