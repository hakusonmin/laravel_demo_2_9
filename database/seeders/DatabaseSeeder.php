<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Reservation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $this->call([
        AdminSeeder::class,
        UserSeeder::class,
        HallSeeder::class,
        SheetSeeder::class,
        MovieSeeder::class,
        DateScheduleSeeder::class,
        TimeScheduleSeeder::class,
        TicketSeeder::class,
      ]);
    }
}
