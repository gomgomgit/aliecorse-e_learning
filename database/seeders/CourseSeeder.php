<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::truncate();
        $faker = Factory::create('id_ID');
        $categories = Category::pluck('id');
        foreach ($categories as $category) {
            for ($i=0; $i < 3; $i++) {
                Course::create([
                    'thumbnail' => 'https://source.unsplash.com/800x600/?food',
                    'name' => $faker->randomElement(['Kursus Bahasa Asing','Belajar Web Developer','Mobile App','Design','Bisnis']),
                    'category_id' => $category,
                    'description' => '<p>'.$faker->paragraphs(3,true).'</p>',
                ]);
            }
        }
    }
}
