<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMark extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'course_id',
        'user_id',
        'course_module_id',
        'score',
        'total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function course_module()
    {
        return $this->belongsTo(CourseModule::class);
    }

}
