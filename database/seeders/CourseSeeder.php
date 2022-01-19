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
                'name' => $faker->words(3,true),
                'category_id' => $categories->id,
                'content' => '<p>'.$faker->paragraphs(3,true).'</p>',
            ],

        ];


    }
}
