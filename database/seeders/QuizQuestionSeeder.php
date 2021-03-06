<?php

namespace Database\Seeders;

use App\Models\LessonQuiz;
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
        $lesson_quizzes = LessonQuiz::pluck('id');
        foreach($lesson_quizzes as $lesson_quiz){
            for($i = 0; $i < 1; $i++){
                QuizQuestion::create([
                    'question' => $faker->text(),
                    'lesson_quiz_id' => $lesson_quiz,
                    'score' => $faker->numberBetween(1, 10),
                    'need_answer' => $faker->randomElement([0, 1]),
                    'random_answer' => $faker->randomElement([0, 1]),
                    'show_answer' => $faker->randomElement([0, 1]),
                ]);
            }
        }
            

        // for ($i=0; $i < 3; $i++) { 
        //     QuizQuestion::create([
        //         'lesson_quiz_id' => $i,
        //         'question' => $faker->text(),
        //         'score' => $faker->numberBetween(1, 10),
        //         'need_answer' => $faker->randomElement([0, 1]),
        //         'random_answer' => $faker->randomElement([0, 1]),
        //         'show_answer' => $faker->randomElement([0, 1]),
        //     ]);
        // }
    }
}
