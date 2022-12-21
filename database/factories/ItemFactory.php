<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(1000, 1000000),
            'description' => $this->faker->words(10, true),
            'thumbnail_url' => $this->faker->imageUrl(),
            'quantity' => $this->faker->numberBetween(1000, 1000000000)
        ];
    }
}
