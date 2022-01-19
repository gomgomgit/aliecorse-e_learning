<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $articleCategories = ArticleCategory::all()->whereIn('id',1);
        dd($articleCategories->toArray());
        return view('admin.pages.category-article.index');
    }
}