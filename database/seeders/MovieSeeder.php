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
                'title' => 'アイロンマン',
                'image_url' => 'theaterPoster.png',
                'description' => 'サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル',
                'is_showing' => 1,
                'published_date' => '1979/10/25',
            ],
            [
                'title' => 'アイロンマン2',
                'image_url' => 'theaterPoster.png',
                'description' => 'サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル',
                'is_showing' => 1,
                'published_date' => '1979/10/26',
            ],
            [
                'title' => 'アイロンマン3',
                'image_url' => 'theaterPoster.png',
                'description' => 'サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル',
                'is_showing' => 1,
                'published_date' => '1979/10/27',
            ],
            [
                'title' => 'アイロンマン4',
                'image_url' => 'theaterPoster.png',
                'description' => 'サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル',
                'is_showing' => 1,
                'published_date' => '1979/10/28',
            ],
            [
                'title' => 'アイロンマン5',
                'image_url' => 'theaterPoster.png',
                'description' => 'サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル',
                'is_showing' => 1,
                'published_date' => '1979/10/29',
            ],
            [
                'title' => 'アイロンマン6',
                'image_url' => 'theaterPoster.png',
                'description' => 'サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル',
                'is_showing' => 1,
                'published_date' => '1979/10/30',
            ],
        ]);
    }
}
