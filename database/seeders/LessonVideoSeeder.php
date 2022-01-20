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
        
        for ($i = 0; $i < 5; $i++){
            LessonVideo::create([
                'lesson_id' => $faker->randomElement([1,2,3]),
                'name' => $faker->randomElement(['Install Laravel','Apa itu Blade','Mengakses ke wep.php']),
                'type' => $faker->randomElement(['Youtube','Embed']),
                'link' => $faker->mimeType(),
            ]);
        }
    }
}
