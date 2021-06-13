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
        'score,'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
