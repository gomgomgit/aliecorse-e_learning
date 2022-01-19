<?php

namespace Database\Seeders;

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


    }
}
