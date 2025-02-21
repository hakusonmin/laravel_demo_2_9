<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('tickets')->insert([
      [
        'time_schedule_id' => 1,
        'sheet_id' => 1,
        'price' => 3000,
        'is_reserved' => 0,
      ],
      [
        'time_schedule_id' => 1,
        'sheet_id' => 2,
        'price' => 3000,
        'is_reserved' => 0,
      ],
      [
        'time_schedule_id' => 1,
        'sheet_id' => 3,
        'price' => 3000,
        'is_reserved' => 0,
      ],
      [
        'time_schedule_id' => 1,
        'sheet_id' => 4,
        'price' => 3000,
        'is_reserved' => 0,
      ],
      [
        'time_schedule_id' => 1,
        'sheet_id' => 5,
        'price' => 3000,
        'is_reserved' => 0,
      ],
      [
        'time_schedule_id' => 1,
        'sheet_id' => 6,
        'price' => 3000,
        'is_reserved' => 0,
      ],
      [
        'time_schedule_id' => 2,
        'sheet_id' => 1,
        'price' => 3000,
        'is_reserved' => 0,
      ],
      [
        'time_schedule_id' => 2,
        'sheet_id' => 2,
        'price' => 3000,
        'is_reserved' => 0,
      ],
      [
        'time_schedule_id' => 2,
        'sheet_id' => 3,
        'price' => 3000,
        'is_reserved' => 0,
      ],
      [
        'time_schedule_id' => 2,
        'sheet_id' => 4,
        'price' => 3000,
        'is_reserved' => 0,
      ],
      [
        'time_schedule_id' => 2,
        'sheet_id' => 5,
        'price' => 3000,
        'is_reserved' => 0,
      ],
      [
        'time_schedule_id' => 2,
        'sheet_id' => 6,
        'price' => 3000,
        'is_reserved' => 0,
      ],
    ]);
  }
}
