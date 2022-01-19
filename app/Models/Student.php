<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
    ];

    public function review()
    {
        return $this->hasMany(Review::class, 'student_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'student_id');
    }

    public function question()
    {
        return $this->hasMany(Question::class, 'student_id');
    }

    public function studentCertificate()
    {
        return $this->hasMany(StudentCertificate::class, 'student_id');
    }

    public function studentCourse()
    {
        return $this->hasMany(StudentCourse::class, 'student_id');
    }
}
