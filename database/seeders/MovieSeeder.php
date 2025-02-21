<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('movies')->insert([
      [
        'name' => 'アイロンマン',
        'image_url' => 'theaterPoster.png',
        'description' => 'サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル',
        'is_showing' => 1,
        'published_date' => '1979/10/25',
      ],
      [
        'name' => 'アイロンマン2',
        'image_url' => 'theaterPoster.png',
        'description' => 'サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル',
        'is_showing' => 1,
        'published_date' => '1979/10/26',
      ],
      [
        'name' => 'アイロンマン3',
        'image_url' => 'theaterPoster.png',
        'description' => 'サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル',
        'is_showing' => 1,
        'published_date' => '1979/10/27',
      ],
      [
        'name' => 'アイロンマン4',
        'image_url' => 'theaterPoster.png',
        'description' => 'サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル',
        'is_showing' => 1,
        'published_date' => '1979/10/28',
      ],
      [
        'name' => 'アイロンマン5',
        'image_url' => 'theaterPoster.png',
        'description' => 'サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル',
        'is_showing' => 1,
        'published_date' => '1979/10/29',
      ],
      [
        'name' => 'アイロンマン6',
        'image_url' => 'theaterPoster.png',
        'description' => 'サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル',
        'is_showing' => 1,
        'published_date' => '1979/10/30',
      ],
    ]);
  }
}
