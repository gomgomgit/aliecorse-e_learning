<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseDiscount;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CourseDiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseDiscount::truncate();
        $faker = Factory::create('id_ID');
        $courses = Course::pluck('id');
        foreach ($courses as $course) {
            for ($i=0; $i < 1; $i++) {
                CourseDiscount::create([
                    'course_id' => $course,
                    'discount_price' => $faker->randomElement([10,20,30,40,50,60,70,80,90]),
                    'date_start' => '2022-01-19',
                    'date_end' => '2022-01-20'
                   
                ]);
            }
        }
       
      


    }
}
