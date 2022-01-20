<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonQuiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'time_limit',
        'limit_type',
        'show_timeout',
        'lesson_id',
        'passing_grade',
        'question_order'
    ];
}
