<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'totalhours',
        'user_id',
        'percentabsent',
        'absenthours',
        'absentclasses',

    ];
   
    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

}