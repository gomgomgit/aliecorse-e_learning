<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('category','user')->get();
        return view('admin.pages.category-article.index')->with([
            'articles' => $articles
        ]); 
    }

    public function store(ArticleRequest $request)      
    {
        $articles = $request->validate([
            'image' => 'required',
        ],[
            'image' => 'Gambar harus diisi',
        ]);

        $image_file = $this->uploadImage($request->file('image'));

        $articles['image'] = $image_file;
        Article::create($articles);
        return redirect()->back();
    }

    public function update(ArticleRequest $request, $id)
    {
        $articles = Article::find($id);
        $data = $request->all();

        if($request->file('image') == null){
            $articles['image'] = $articles->image;
        }else{
            $this->removeImage($articles->image);
            $image_file = $this->uploadImage($request->file('image'));
            $data['image'] = $image_file;
        }

        $articles->update();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $articles = Article::findOrFail($id);
        $articles->delete();
        return redirect()->back();

    }

    public function uploadImage($image)
    {
        $new_name_image = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $new_name_image);
        return $new_name_image;
    }

    public function removeImage($image)
    {
        if(file_exists('profile/'.$image)){
            unlink('profile/'.$image);
        }
    }

}
