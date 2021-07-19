<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeStatement extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'date',
        'document_number',
        'document_type',
        'amount',
        'type',
    ];

    public function feestatement()
    {
        return $this->belongsTo(User::class);
    }


}
