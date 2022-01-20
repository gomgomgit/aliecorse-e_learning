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
        $categories = Category::all()->whereIn('id',1)->first();
        $categories2 = Category::all()->whereIn('id',2)->first();
        $categories3 = Category::all()->whereIn('id',3)->first();

        $courses = [
            [
                'thumbnail' => 'https://source.unsplash.com/800x600/?food',
                'category_id' => $categories->id,
                'description' => '<p>'.$faker->paragraphs(3,true).'</p>',
            ],

        ];
        $courses2 = [
            [
                'thumbnail' => 'https://source.unsplash.com/800x600/?food',
                'category_id' => $categories2->id,
                'description' => '<p>'.$faker->paragraphs(3,true).'</p>',
            ],

        ];
        $courses3 = [
            [
                'thumbnail' => 'https://source.unsplash.com/800x600/?food',
                'category_id' => $categories3->id,
                'description' => '<p>'.$faker->paragraphs(3,true).'</p>',
            ],

        ];

        foreach($courses as $course){
            for($i = 0; $i < 2; $i++){
                Course::create([
                    'thumbnail' => $course['thumbnail'],
                    'name' => $faker->randomElement(['Kursus Bahasa Asing','Belajar Web Developer','Mobile App','Design','Bisnis']),
                    'category_id' => $course['category_id'],
                    'description' => $course['description'],
                ]);
            }
        }
        foreach($courses2 as $course){
            for($i = 0; $i < 2; $i++){
                Course::create([
                    'thumbnail' => $course['thumbnail'],
                    'name' => $faker->randomElement(['Kursus Bahasa Asing','Belajar Web Developer','Mobile App','Design','Bisnis']),
                    'category_id' => $course['category_id'],
                    'description' => $course['description'],
                ]);
            }
        }
        foreach($courses3 as $course){
            for($i = 0; $i < 2; $i++){
                Course::create([
                    'thumbnail' => $course['thumbnail'],
                    'name' => $faker->randomElement(['Kursus Bahasa Asing','Belajar Web Developer','Mobile App','Design','Bisnis']),
                    'category_id' => $course['category_id'],
                    'description' => $course['description'],
                ]);
            }
        }


    }
}
