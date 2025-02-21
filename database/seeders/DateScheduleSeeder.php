<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DateScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('date_schedules')->insert([
          [
            'movie_id' => 1,
            'date' => '1979/10/25',
          ],
          [
            'movie_id' => 1,
            'date' => '1979/10/29',
          ],
          [
            'movie_id' => 1,
            'date' => '1979/11/10',
          ],
          [
            'movie_id' => 1,
            'date' => '1979/11/25',
          ],
        ]);
    }
}
