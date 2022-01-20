<?php

namespace Database\Seeders;

use App\Models\Review;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::truncate();
        $faker = Factory::create('id_ID');

        for ($i=1; $i < 16; $i++) { 
            Review::create([
                'course_id' => $i,
                'student_id' => $i,
                'rate' => $faker->randomElement([1,2,3,4,5]),
                'detail' => $faker->text
            ]);
        }

    }
}
