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
<<<<<<< HEAD
        'show_timeout',
        'lesson_id',
=======
>>>>>>> 18d77a298680d88d68b6bd384e4642e09e2c8110
        'passing_grade',
        'question_order',
        'lesson_id'
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id', 'id');
    }
}
