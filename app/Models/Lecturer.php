<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'user_id',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function course_lecturers()
    {
        return $this->hasMany(CourseLecturer::class);
    }
}
