<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'name',
        'category_id',
        'description',
        'duration_hour',
        'duration_minute',
        'duration_second',
        'level',
        'price',
        'benefits',
        'requirements',
        'audients',
        'user_id',
        'status'
    ];

    public function review()
    {
        return $this->hasMany(Review::class, 'course_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'course_id');
    }

    public function question()
    {
        return $this->hasMany(Question::class, 'course_id');
    }

    public function studentCertificate()
    {
        return $this->hasMany(StudentCertificate::class, 'course_id');
    }

    public function studentCourse()
    {
        return $this->hasMany(StudentCourse::class, 'course_id');
    }

    public function courseDiscount()
    {
        return $this->hasOne(CourseDiscount::class, 'course_id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
