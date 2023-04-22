<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];
        $faker = Factory::create();
        $i;

        for($i = 1; $i <= 10; $i++){
            $posts [] = [
                
                'title'             =>$faker->sentence,
                'excerpt'           => $faker->paragraph,
                'content'           => $faker->paragraph,
                'image'             => random_int(1, 10).'.jpg',
                'author_id'         => random_int(1, 10),
                'created_at'        => $faker->dateTime(),
                'updated_at'        => $faker->dateTime(),
            ];
        }

        DB::table("posts")->insert($posts);
    }
}
