<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'thumbnail',
        'category_article_id',
        'content',
        'user_id',
        'status',
    ];

    public function articleCategory()
    {
        return $this->belongsTo(ArticleCategory::class, 'category_article_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
