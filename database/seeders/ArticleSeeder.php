<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Category;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();
        $faker = Factory::create('id_ID');

        $articleCategories = ArticleCategory::pluck('id');

        $user = User::find(1);
        
        foreach ($articleCategories as $category) {
            for ($i=0; $i < 3; $i++) {
                Article::create([
                    'title' => $faker->words(3,true),
                    'thumbnail' => 'https://source.unsplash.com/800x600/?food',
                    'category_article_id' => $category,
                    'content' => '<p>'.$faker->paragraphs(3,true).'</p>',
                    'user_id' => $user->id
                ]);
            }
        }
        
    }
}
