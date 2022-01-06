<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryArticleRequest;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;

class CategoryArticleController extends Controller
{
    public function index()
    {
        $categories = CategoryArticle::all();

        return view('admin.pages.category.index')->with([
            'categories' => $categories
        ]);
    }

    public function store(CategoryArticleRequest $request)
    {
        $data = $request->all();
        CategoryArticle::create($data);
        return redirect()->back();
    }


    public function update(CategoryArticleRequest $request, $id)
    {
        $data = $request->all();
        $category_articles = CategoryArticle::findOrFail($id);
        $category_articles->update($data);
        return redirect()->back();

    }

    public function destroy($id)
    {
        $category_articles = CategoryArticle::findOrFail($id);
        $category_articles->delete();
        return redirect()->back();

    }
   
}
