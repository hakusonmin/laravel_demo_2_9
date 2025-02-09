<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
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
            'title' => $this->faker->unique()->word,
            'image_url' => $this->faker->imageUrl(),
            'published_date' => $this->faker->date(),
            'is_showing' => $this->faker->boolean,
            'description' => $this->faker->realText(20),
        ];
    }
}

