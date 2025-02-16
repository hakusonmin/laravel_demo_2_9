<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
      DB::table('halls')->insert([
        [
          'id' => 1,
          'title' => 'A',
        ],
        [
          'id' => 2,
          'title' => 'B',
        ],
        [
          'id' => 3,
          'title' => 'C',
        ],
        [
          'id' => 4,
          'title' => 'D',
        ],
        [
          'id' => 5,
          'title' => 'E',
        ],
        [
          'id' => 6,
          'title' => 'F',
        ]
      ]);
    }
}
