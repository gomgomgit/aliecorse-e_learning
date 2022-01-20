<?php

namespace Database\Seeders;

use App\Models\Order;
use Faker\Factory;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::truncate();
        $faker = Factory::create('id_ID');

        for ($i=1; $i < 16; $i++) { 
            Order::create([
                'course_id' => $i,
                'student_id' => $i,
                'price' => $faker->numberBetween(100000, 2000000)
            ]);
        }
    }
}
