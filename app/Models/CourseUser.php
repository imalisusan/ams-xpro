<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'user_id',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
