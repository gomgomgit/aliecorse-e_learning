<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleCategory::truncate();
        $categories = [
            ['name' => 'IT'],
            ['name' => 'Perpajakan'],
            ['name' => 'Bisnis']
        ];
        foreach($categories as $category){
            ArticleCategory::create([
                'name' => $category['name'],
            ]);
        }
    }
}
