<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('reservations')->insert([
      [
        'user_id' => 1,
        'ticket_id' => 2,
      ],
      [
        'user_id' => 1,
        'ticket_id' => 3,
      ],
    ]);
    }
}
