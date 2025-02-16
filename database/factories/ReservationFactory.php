<?php

namespace Database\Factories;

use App\Models\MovieSheet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $count = 1;
        static $count2 = 1;

        return [
            'id' => $count++,
            'user_id' => $count2++,
            'movie_sheet_id' => MovieSheet::factory(),
        ];
    }
}
