<?php

namespace Database\Seeders;

use App\Models\QuizQuestion;
use Faker\Factory;
use Illuminate\Database\Seeder;

class QuizQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuizQuestion::truncate();
        $faker = Factory::create('id_ID');

        QuizQuestion::create([
            'question' => $faker->text(),
            'score' => $faker->numberBetween(1, 10),
            'need_answer' => $faker->randomElement([0, 1]),
            'random_answer' => $faker->randomElement([0, 1]),
            'show_answer' => $faker->randomElement([0, 1]),
        ]);
    }
}
