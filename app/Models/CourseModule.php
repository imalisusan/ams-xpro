<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'name',
        'weight',
        'maximum_score',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function course_marks()
    {
        return $this->hasMany(CourseMark::class);
    }
}
