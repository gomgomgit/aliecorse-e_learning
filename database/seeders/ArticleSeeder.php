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
        $articleCategories = ArticleCategory::all()->whereIn('id',1)->first();
        $articleCategories2 = ArticleCategory::all()->whereIn('id',2)->first();
        $articleCategories3 = ArticleCategory::all()->whereIn('id',3)->first();
        $user = User::all()->whereIn('id',1)->first();
        
        $articles = [
            [
                'title' => $faker->words(3,true),
                'thumbnail' => 'https://source.unsplash.com/800x600/?food',
                'category_article_id' => $articleCategories->id,
                'content' => '<p>'.$faker->paragraphs(3,true).'</p>',
                'user_id' => $user->id
            ],

        ];

        $articles2 = [
            [
                'title' => $faker->words(3,true),
                'thumbnail' => 'https://source.unsplash.com/800x600/?food',
                'category_article_id' => $articleCategories2->id,
                'content' => '<p>'.$faker->paragraphs(3,true).'</p>',
                'user_id' => $user->id
            ],

        ];

        $articles3 = [
            [
                'title' => $faker->words(3,true),
                'thumbnail' => 'https://source.unsplash.com/800x600/?food',
                'category_article_id' => $articleCategories3->id,
                'content' => '<p>'.$faker->paragraphs(3,true).'</p>',
                'user_id' => $user->id
            ],
        ];

        foreach($articles as $article){
            for($i = 0; $i < 5; $i++){
                Article::create([
                    'title' => $article['title'],
                    'thumbnail' => $article['thumbnail'],
                    'category_article_id' => $article['category_article_id'],
                    'content' => $article['content'],
                    'user_id' => $article['user_id'],
                ]);
            }
        }

        foreach($articles2 as $article){
            for($i = 0; $i < 5; $i++){
                Article::create([
                    'title' => $article['title'],
                    'thumbnail' => $article['thumbnail'],
                    'category_article_id' => $article['category_article_id'],
                    'content' => $article['content'],
                    'user_id' => $article['user_id'],
                ]);
            }
        }

        foreach($articles3 as $article){
            for($i = 0; $i < 5; $i++){
                Article::create([
                    'title' => $article['title'],
                    'thumbnail' => $article['thumbnail'],
                    'category_article_id' => $article['category_article_id'],
                    'content' => $article['content'],
                    'user_id' => $article['user_id'],
                ]);
            }
        }
        
    }
}
