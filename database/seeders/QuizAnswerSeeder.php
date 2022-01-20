<?php

namespace Database\Seeders;

use App\Models\QuizAnswer;
use Faker\Factory;
use Illuminate\Database\Seeder;

class QuizAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuizAnswer::truncate();
        $faker = Factory::create('id_ID');

        QuizAnswer::create([
            'title' => $faker->text(),
            'image' => $faker->imageUrl(800, 600),
            'format' => $faker->randomElement(['Text', 'Gambar', 'Keduanya'])
        ]);
    }
}
