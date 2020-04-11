<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0; $i<5; $i++){
            DB::table('products')->insert(
                [
                    'name' => $faker->firstName,
                    'price' => $faker ->numberBetween($min=100, $max=900),
                    'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                ]
            );
        }
    }
}
