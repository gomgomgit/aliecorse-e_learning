<?php

namespace Database\Seeders;

use App\Models\CategoryArticle;
use Carbon\Factory;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CategoryArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       CategoryArticle::truncate();

        CategoryArticle::create([
            'name' => 'Programming' 
        ]);
        CategoryArticle::create([
            'name' => 'Design' 
        ]);
        CategoryArticle::create([
            'name' => 'Perpajakan' 
        ]);
        CategoryArticle::create([
            'name' => 'Bisnis' 
        ]);
    }
}
