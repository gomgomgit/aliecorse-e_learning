<?php

namespace Database\Seeders;

use App\Models\LessonFile;
use Faker\Factory;
use Illuminate\Database\Seeder;

class LessonFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LessonFile::truncate();
        $faker = Factory::create('id_ID');
       
            for($i = 0; $i < 3; $i++){
                LessonFile::create([
                    'lesson_id' => $faker->randomElement([1,2,4]),
                    'name' => $faker->randomElement(['File 1 Apa Saja','File 2 Apa Saja','File 3 Apa Saja']),
                    'description' =>$faker->randomElement(['belajar dasar javascript','belajar dasar php','apa itu html','membuar website lebih menarik dengan menggunakan css']),
                    'file' =>$faker->mimeType(),
                ]);
        }
    
    }
}