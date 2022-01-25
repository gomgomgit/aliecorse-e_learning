<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
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
        $user = User::find(1);
        
        foreach ($categories as $category) {
            for ($i=0; $i < 3; $i++) {
                Course::create([
                    'thumbnail' => 'https://source.unsplash.com/800x600/?food',
                    'name' => $faker->word(4,true),
                    'category_id' => $category,
                    'description' => '<p>'.$faker->paragraphs(2,true).'</p>',
                    'level' => $faker->randomElement(['All', 'Beginner', 'Intermediate', 'Expert']),
                    'price' => $faker->numberBetween(10000, 1000000),
                    'duration_hour' => $faker->randomDigit(),
                    'duration_minute' => $faker->randomDigit(),
                    'duration_second' => $faker->randomDigit(),
                    'benefits' => $faker->word(4,true),
                    'requirements' => $faker->word(4,true),
                    'audients' => $faker->word(4,true),
                    'user_id' => $user->id,
                    'status' => 'Active'
                ]);
            }
        }
    }
}
