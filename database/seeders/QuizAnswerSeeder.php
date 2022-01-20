<?php

namespace Database\Seeders;

use App\Models\QuizAnswer;
use Faker\Factory;
use Illuminate\Database\Seeder;

class QuizAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuizAnswer::truncate();
        $faker = Factory::create('id_ID');

        for ($i=1; $i < 4; $i++) { 
            QuizAnswer::create([
                'quiz_question_id' => $i,
                'title' => $faker->text(),
                'image' => $faker->imageUrl(800, 600),
                'format' => $faker->randomElement(['Text', 'Gambar', 'Keduanya'])
            ]);
        }
    }
}
