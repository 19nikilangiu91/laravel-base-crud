<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Saint>
 */
class SaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->firstName(),
            'place_of_birth' => fake()->city(),
            'blessing_date' => fake()->dateTimeAD(),
            'number_of_miracles' => fake()->randomNumber(5, true)
        ];
    }
}