<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
            Post::create(
                [
                    'title' => $title,
                    'slug' => str_replace(" ", "-", $title),
                    // 'image' => $faker->imageUrl($width = 640, $height = 480),
                    'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                ]
                );
            }
    }
}
