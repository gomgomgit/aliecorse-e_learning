<?php

namespace Database\Seeders;

use App\Models\StudentCourse;
use Faker\Factory;
use Illuminate\Database\Seeder;

class StudentCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentCourse::truncate();
        $faker = Factory::create('id_ID');

        for ($i=1; $i < 16; $i++) { 
            StudentCourse::create([
                'course_id' => $i,
                'student_id' => $i,
                'date' => $faker->date()
            ]);
        }
    }
}
