<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
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
            $title = $faker->sentence($nbWord = 6, $variableNbWords = true);
            DB::table('articles')->insert(
                [
                    'title' => $title,
                    'slug' => str_replace(" ", "_", $title),
                    'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                    'content' => $faker->paragraph($nbSentences = 15, $variableNbSentences = true),
                ]
            );
        }
    }
}
