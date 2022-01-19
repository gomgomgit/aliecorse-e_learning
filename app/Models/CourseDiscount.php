<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDiscount extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'discount_price',
        'date_start',
        'date_end'
    ];
}
