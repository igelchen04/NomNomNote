<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CategoryFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => ucfirst($this->faker->unique()->words(2, true)),
            'image' => $this->faker->imageUrl(400, 300, 'category'),
            'description' => $this->faker->sentence(10),
            'created_by' => User::inRandomOrder()->first()?->id ?? User::factory(),
        ];
    }
}
