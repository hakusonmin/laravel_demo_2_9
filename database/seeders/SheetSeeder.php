<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sheets')->insert([
          [ 'id' => 1,
            'title' => 'A-1',
            'hall_id' => 1,
          ],
          [
            'id' => 2,
            'title' => 'A-2',
            'hall_id' => 1,
          ],
          [
            'id' => 3,
            'title' => 'A-3',
            'hall_id' => 1,
          ],
          [
            'id' => 4,
            'title' => 'A-4',
            'hall_id' => 1,
          ],
          [
            'id' => 5,
            'title' => 'A-5',
            'hall_id' => 1,
          ],
          [
            'id' => 6,
            'title' => 'A-6',
            'hall_id' => 1,
          ],
          [
            'id' => 7,
            'title' => 'A-7',
            'hall_id' => 1,
          ]
        ]);
    }
}
