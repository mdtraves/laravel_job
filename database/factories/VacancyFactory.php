<?php

namespace Database\Factories;

use App\Models\Vacancy;
use Faker\Core\DateTime;
use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
  
    protected $model = Vacancy::class;

    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'description' => fake()->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2),
            'company' => fake()->company(),
            'location' => fake()->address(),
            'salary' => fake()->randomNumber(5, true),
            'expiry_date' => fake()->dateTimeBetween('-1 week', '+1 week')
        ];
    }
}


