<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'topic_id',
        'type',
        'is_preview',
        'order'
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }
    
    public function lessonFile()
    {
        return $this->hasMany(LessonFile::class, 'lesson_id');
    }

    public function lessonQuiz()
    {
        return $this->hasMany(LessonQuiz::class, 'lesson_id');
    }

    public function lessonVideo()
    {
        return $this->hasMany(LessonVideo::class, 'lesson_id');
    }
}
