<?php

namespace Database\Seeders;

use App\Models\Review;
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
        LessonSeeder::class,
        LessonVideoSeeder::class,
        LessonFileSeeder::class,
        LessonQuizSeeder::class,
        StudentSeeder::class,
        ArticleCategorySeeder::class,
        ArticleSeeder::class,
        CategorySeeder::class,
        CourseSeeder::class,
        TopicSeeder::class,
        CertificateSettingSeeder::class,
        OrderSeeder::class,
        QuestionSeeder::class,
        ReviewSeeder::class,
        StudentCertificateSeeder::class,
        StudentCourseSeeder::class
        ]);
    }
}
