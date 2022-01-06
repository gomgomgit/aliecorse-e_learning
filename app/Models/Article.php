<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected  $fillable = [
        'user_id',
        'category_id',
        'title',
        'content',
        'image',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(CategoryArticle::class, 'category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
