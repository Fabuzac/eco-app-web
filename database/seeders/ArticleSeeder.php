<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use App\Models\Articles;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {

        $faker = Factory::create();

        for ($i=0; $i < 25 ; $i++) { 
            Articles::create([
                'title' => $faker->sentence(),
                'summary' => $faker->sentence(),
                'body' => $faker->text($maxNbChars = 600),
                'user_id' => User::inRandomOrder()->first()->id,
            ]);
        }
    }
}
