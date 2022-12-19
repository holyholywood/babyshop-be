<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExitItem>
 */
class ExitItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'transactions_id' => $this->faker->numberBetween(1, 10),
            'items_id' => $this->faker->numberBetween(1, 10),
            'qty' => $this->faker->numberBetween(1, 100)
        ];
    }
}
