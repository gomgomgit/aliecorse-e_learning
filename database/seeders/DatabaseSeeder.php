<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        UserSeeder::class,
        CategorySeeder::class,
        ArticleCategorySeeder::class,
        ArticleSeeder::class,
        CourseSeeder::class,
        CourseDiscountSeeder::class,
        TopicSeeder::class,
        LessonSeeder::class,
        LessonVideoSeeder::class,
        LessonFileSeeder::class,
        LessonQuizSeeder::class,
        
        ]);
    }
}
