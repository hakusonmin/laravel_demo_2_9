<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeScheduleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('time_schedules')->insert([
      [
        'date_schedule_id' => 1,
        'start_time' => '10:00:00',
        'end_time' => '11:00:00',
      ],
      [
        'date_schedule_id' => 1,
        'start_time' => '12:00:00',
        'end_time' => '13:00:00',
      ],
      [
        'date_schedule_id' => 1,
        'start_time' => '14:00:00',
        'end_time' => '15:00:00',
      ],
      [
        'date_schedule_id' => 1,
        'start_time' => '16:00:00',
        'end_time' => '17:00:00',
      ],
      [
        'date_schedule_id' => 2,
        'start_time' => '10:00:00',
        'end_time' => '11:00:00',
      ],
      [
        'date_schedule_id' => 2,
        'start_time' => '12:00:00',
        'end_time' => '13:00:00',
      ],
      [
        'date_schedule_id' => 2,
        'start_time' => '14:00:00',
        'end_time' => '15:00:00',
      ],
      [
        'date_schedule_id' => 2,
        'start_time' => '16:00:00',
        'end_time' => '17:00:00',
      ],
    ]);
  }
}
