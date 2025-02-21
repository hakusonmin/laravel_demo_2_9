<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie_sheets')->insert([
          [
            'id' => 1,
            'movie_id' => 1,
            'sheet_id' => 1,
            'start_datetime' => '1979/10/25 17:00:00',
            'end_datetime' => '1979/10/25 18:30:00',
            'price' => 3000,
            'is_reserved' => 0
          ],
          [
            'id' => 1,
            'movie_id' => 1,
            'sheet_id' => 2,
            'start_datetime' => '1979/10/25 17:00:00',
            'end_datetime' => '1979/10/25 18:30:00',
            'price' => 3000,
            'is_reserved' => 0
          ],
          [
            'id' => 1,
            'movie_id' => 1,
            'sheet_id' => 1,
            'start_datetime' => '1979/10/25 17:00:00',
            'end_datetime' => '1979/10/25 18:30:00',
            'price' => 3000,
            'is_reserved' => 0
          ],



        ]);
    }
}
