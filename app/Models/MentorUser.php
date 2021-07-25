<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentor_id',
        'user_id',
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
