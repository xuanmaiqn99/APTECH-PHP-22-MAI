<?php

use App\Post;  //eloquent-ORM
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;   //Query builder

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
            // DB::table('posts')->insert(
            //     [
            //         'title' => $title,
            //         'slug' => str_replace(" ","-",$title),
            //         'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            //         'content' => $faker->paragraph($nbSentences = 15, $variableNbSentences = true),
            //     ]
            // );
            Post::create(
                [
                    'title' => $title,
                    'slug' => str_replace(" ", "-", $title),
                    'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                    'content' => $faker->paragraph($nbSentences = 15, $variableNbSentences = true),
                ]
                );
        }
    }
}
