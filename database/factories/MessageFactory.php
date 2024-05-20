<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->realTextBetween($minNbChars = 20, $maxNbChars = 100, $indexSize = 2),
            'message' => fake()->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2),
            'company' => fake()->company(),
            'location' => fake()->address(),
            'salary' => fake()->randomNumber(5, true),
        ];
    }
}
