<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ReviewFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => ucfirst($this->faker->unique()->words(2, true)),
            'text' => $this->faker->sentence(10),
            'rating' => $this->faker->randomFloat(1, 0, 5),
            'created_by' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'product_id' => Product::inRandomOrder()->first()?->id ?? Product::factory(),
        ];
    }
}
