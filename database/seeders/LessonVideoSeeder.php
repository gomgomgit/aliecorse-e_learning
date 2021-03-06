<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\LessonVideo;
use Faker\Factory;
use Illuminate\Database\Seeder;

class LessonVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LessonVideo::truncate();
        $faker = Factory::create('id_ID');
        $lessons = Lesson::pluck('id');
        foreach ($lessons as $lesson) {
            for ($i=0; $i < 1; $i++) {
                LessonVideo::create([
                    'name' => $faker->randomElement(['Install Laravel','Apa itu Blade','Mengakses ke wep.php']),
                    'type' => $faker->randomElement(['Youtube','Embed']),
                    'lesson_id' => $lesson,
                    'link' => $faker->mimeType(),
                  
                ]);
            }
        }
        
    }
}
