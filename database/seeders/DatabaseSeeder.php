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
        HallSeeder::class,
        SheetSeeder::class
      ]);
      Reservation::factory(8)->create();
    }
}
