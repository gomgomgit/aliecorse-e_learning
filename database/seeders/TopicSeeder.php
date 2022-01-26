<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Topic;

use Faker\Factory;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::truncate();
        $faker = Factory::create('id_ID');
        $courses = Course::pluck('id');

        foreach($courses as $course){
            for($i = 1; $i < 3; $i++){
                Topic::create([
                    'name' => $faker->randomElement(['Latihan Menggambar1','Install Laravel','Tutorial Penthol']),
                    'description' => $faker->randomElement([
                        'kamu mungkin tidak tau tentang itu',
                        'iya mungkin bisa aja bergitu',
                        'tapi kita harus berusaha untuk tahu tentang itu'
                    ]),
                    'order' => $i,
                    'course_id' => $course,

                ]);
            }
        }
        // Topic::truncate();
        // $faker = Factory::create('id_ID');

        // for ($i = 0; $i < 5; $i++){
        //     Topic::create([
        //         'name' => $faker->randomElement(['Latihan Menggambar1','Install Laravel','Tutorial Penthol']),
        //         'description' => $faker->randomElement([
        //             'kamu mungkin tidak tau tentang itu',
        //             'iya mungkin bisa aja bergitu',
        //             'tapi kita harus berusaha untuk tahu tentang itu'
        //         ]),
        //         'order' => $faker->randomElement([1,2,3,4,5,6,7,8,9]),
        //         'course_id' => 1,
        //     ]);
        // }
    }
}
