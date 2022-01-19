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
        // $categories = ArticleCategory::get();
        // $users = User::all();
        $faker = Factory::create('id_ID');
        $articles = [
            'title' => $faker->words(3,true),
            'thumbnail' => 'https://source.unsplash.com/800x600/?food',
            'category_article_id' =>  rand(1, ArticleCategory::count()),
            'content' => '<p>'.$faker->paragraph(3,true).'</p>',
            'user_id' => rand(1, User::count()),
            'status' => 'Active'
        ];
        foreach($articles as $article){
            ArticleCategory::create([
                'title' => $article['title'],
                'thumbnail' => $article['thumbnail'],
                'category_article_id' => $article['category_article_id'],
                'content' => $article['content'],
                'user_id' => $article['user_id'],
                'status' => $article['status']
            ]);
        }

    }
}
