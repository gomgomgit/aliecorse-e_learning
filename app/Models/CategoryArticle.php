<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}