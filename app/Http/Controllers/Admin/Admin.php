<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ExamCardNotification;
// use App\Helpers\Util;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class Admin extends Controller
{
    public function __construct(){}

    public function send_examcard_notif(){
        // We need to query the students whose rate of absence is <30%, and have cleared fees

        $users = User::all();

        foreach ($users as $user) {
            Mail::to($user)->queue(new ExamCardNotification());
        }
    }
}
