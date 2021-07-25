<?php

namespace App\Models;

use App\Helpers\Util;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'reg_id',
        'phone_no',
        'dob',
        'degree_id',
        'gender',
        'religion',
        'high_school',
        'primary_school',
        'address',
        'residence',
        'fathers_name',
        'fathers_occupation',
        'fathers_phone_number',
        'mothers_name',
        'mothers_occupation',
        'mothers_phone_number',
        'guardians_name',
        'guardians_occupation',
        'guardians_phone_number',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function degree()
    {
        return $this->belongsTo(Degree::class);
    }

    public function course_users()
    {
        return $this->hasMany(CourseUser::class);
    }
  
    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
    public function marks()
    {
        return $this->hasMany(CourseMark::class);
    }
   
    public function fee_balance()
    {
        $invoice_sum = NULL;
        $receipt_sum = NULL;
        $user = User::find(Auth::user()->id);
        $invoices = FeeStatement::where([
            ['document_type', "Invoice"],
            ['user_id', $user->id]
        ])->get();

        foreach($invoices as $invoice)
        {
            $invoice_sum = $invoice_sum + $invoice['amount'];
        }

        $receipts = FeeStatement::where([
            ['document_type', "Receipt"],
            ['user_id', $user->id]
        ])->get();

        foreach($receipts as $receipt)
        {
            $receipt_sum = $receipt_sum + $receipt['amount'];
        }

        $fee_balance =$invoice_sum - $receipt_sum;
        $fee_balance = number_format($fee_balance, 2, '.', ',');
         if($fee_balance > 0)
         {
             return $fee_balance;
         }
         else
         {
             return 0;
         }
    }
}
