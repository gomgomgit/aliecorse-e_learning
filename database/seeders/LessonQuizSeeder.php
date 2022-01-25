<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\LessonQuiz;
use Faker\Factory;
use Illuminate\Database\Seeder;

class LessonQuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
      
        LessonQuiz::truncate();
        $faker = Factory::create('id_ID');
        $lessons = Lesson::pluck('id');
        foreach ($lessons as $lesson) {
            for ($i=0; $i < 1; $i++) {
                LessonQuiz::create([
                    'lesson_id' => $lesson,
                    'name' => $faker->randomElement(['Apa itu Blade?','Bagamana cara mengambil nilai di type data array di php?','Bagaiman membuat list di html']),
                    'detail' => $faker->randomElement([
                        'Ini Adalah kuis untuk menguji peserta tentang Php',
                        'Buatlah tipe data Array di javascript',
                        'Coba buat data Array di Php'
                    ]),                    
                    'time_limit' => $faker->randomElement([5,10,15,20]),
                    'limit_type' => $faker->randomElement(['Detik','Menit']),
                    'show_timeout' => $faker->randomElement([0,1]),
                    'passing_grade' => $faker->randomElement([10,20,30,40,50,60,70,80,90,100]),
                    'question_order' => $faker->randomElement(['Random','Berurutan']),
                  
                ]);
            }
        }
       
    }
}
