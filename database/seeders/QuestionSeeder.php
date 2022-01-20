<?php

namespace Database\Seeders;

use App\Models\Question;
use Faker\Factory;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::truncate();
        $faker = Factory::create('id_ID');

        for ($i=1; $i < 16; $i++) { 
            Question::create([
                'course_id' => $i,
                'student_id' => $i,
                'question' => $faker->realText(100, 2)
            ]);
        }
    }
}
