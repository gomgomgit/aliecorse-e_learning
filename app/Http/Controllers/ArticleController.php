<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderByDesc('id')->get();
        
        return view('admin.pages.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articleCategories = ArticleCategory::get();

        return view('admin.pages.article.create', compact('articleCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required|image',
            'title' => 'required',
            'content' => 'required'
        ]);

        if ($request->file('thumbnail') !== null ) {
            $image = $request->file('thumbnail')->store('assets/thumbnail','public');
        }else{
            $image=null;
        }

        Article::create([
            'thumbnail' => $image,
            'title' => $request->title,
            'content' => $request->content,
            'category_article_id' => $request->category_article_id,
            'user_id' => 1,
            'status' => 'Active',
        ]);

        return redirect()->route('articles.index')->with('success-create', 'berhasil membuat data artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.pages.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = Article::findOrFail($id);
        $articleCategories = ArticleCategory::get();
        
        return view('admin.pages.article.create', compact('articles', 'articleCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'thumbnail' => 'required|image',
            'title' => 'required',
            'content' => 'required'
        ]);

        $data = Article::find($id);

        if ($request->file('thumbnail') !== null ) {
            $image = $request->file('thumbnail')->store('assets/thumbnail','public');
        }else{
            $image = $data->thumbnail;
        }

        $data->update([
            'thumbnail' => $image,
            'title' => $request->title,
            'content' => $request->content,
            'category_article_id' => $request->category_article_id,
            'user_id' => 1,
            'status' => 'Active',
        ]);

        return redirect()->route('articles.index')->with('success-update', 'berhasil mengedit data artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Article::findOrFail($id);

        $data->delete();
        return back()->with('success-delete', 'berhasil menghapus data artikel');
    }
}
