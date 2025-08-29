<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $images = [
            'https://picsum.photos/id/1009/850/425',
            'https://picsum.photos/id/1010/850/425',
            'https://picsum.photos/id/1012/850/425',
            'https://picsum.photos/id/1013/850/425',
        ];

        for ($i = 0; $i < 4; $i++) { 
            $title = $faker->sentence(6);
            DB::table('articles')->insert([
                'category_id' => rand(1, 7),
                'title' => $title,
                'image' => $images[$i],
                'content' => $faker->paragraph(6),
                'slug' => Str::slug($title),
                'created_at' => $faker->dateTime('now'),
                'updated_at' => now(),
            ]);
        }
    }
}
