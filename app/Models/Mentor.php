<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'user_id',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function mentor_users()
    {
        return $this->hasMany(MentorUser::class);
    }

    public function mentoring_sessions()
    {
        return $this->hasMany(MentoringSession::class);
    }
}
