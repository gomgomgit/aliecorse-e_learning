<?php

namespace Database\Seeders;

use App\Models\Student;
use Faker\Factory;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();
        $faker = Factory::create('id_ID');
        for ($i=0; $i < 15; $i++) { 
            Student::create([
                'first_name' =>$faker->firstName(),
                'last_name' =>$faker->lastName(),
                'email' => $faker->freeEmail(),
            ]);
        }
    }
}
