<?php

namespace Database\Seeders;

use App\Models\Article;
use Carbon\Factory;
use Faker\Factory as Faker;

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
        $faker = Faker::create('id_ID');

        foreach(range(0,3) as $index){
                Article::create([
                    'category_id' => rand(1, Article::count()),
                    'title' => $faker->words(3,true),               
                    'content' => '<p>'.$faker->paragraphs(3,true).'</p>',
                    'image' => 'https://source.unsplash.com/800X600/?food',
                    'status' => $faker->randomElement(['Active','Not Active'])
                ]);
        }
    }
}
