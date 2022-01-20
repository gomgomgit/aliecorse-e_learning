<?php

namespace Database\Seeders;

use App\Models\StudentCertificate;
use Faker\Factory;
use Illuminate\Database\Seeder;

class StudentCertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentCertificate::truncate();
        $faker = Factory::create('id_ID');

        for ($i=1; $i < 16; $i++) { 
            StudentCertificate::create([
                'course_id' => $i,
                'student_id' => $i,
                'date' => $faker->date()
            ]);
        }
    }
}
