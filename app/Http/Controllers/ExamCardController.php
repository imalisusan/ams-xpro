<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Mail\ExamCardNotification;

class ExamCardController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('examCard.index', compact('user'));
    }

    public function sendNotification()
    {
        $user = Auth::user();
        Mail::to($user)->send(new ExamCardNotification());
    }
}
