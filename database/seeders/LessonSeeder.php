<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Topic;
use Faker\Factory;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lesson::truncate();
        $faker = Factory::create('id_ID');
       
            for($i = 0; $i < 3; $i++){
                Lesson::create([
                    'topic_id' => $faker->randomElement([1,2,4]),
                    'type' => $faker->randomElement(['Video','File','Quiz']),
                    'order' => $faker->randomElement([1,2,3,4,5,6,7,8,9]),
                ]);
            }
    }
}
