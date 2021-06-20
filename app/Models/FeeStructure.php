<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeStructure extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_year',
        'semester',
        'sem_start_date',
        'sem_end_date',
        'file_path',
        'file_name',
    ];
    protected $table = 'fee_structures';
}
