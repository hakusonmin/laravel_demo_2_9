<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\Sheet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MovieSheet>
 */
class MovieSheetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $count = 1;

        return [
            'id' => $count++,
            'start_datetime' => $this->faker->dateTime(),
            'end_datetime' => $this->faker->dateTime(),
            'price' => $this->faker->randomNumber,
            'is_reserved' => $this->faker->boolean,
            'movie_id' => Movie::factory(),
            'sheet_id' => Sheet::factory(),
        ];
    }
}
