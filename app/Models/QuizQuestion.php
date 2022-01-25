<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_quiz_id',
        'question',
        'lesson_quiz_id',
        'score',
        'need_answer',
        'random_answer',
        'show_answer'
    ];
}
