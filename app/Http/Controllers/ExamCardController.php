<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Helpers\Util;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Mail\ExamCardNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ExamCardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $status = NULL;
        $balance = $user->fee_balance();
        if ($balance > 0)
        {
            return redirect()->route('examcards.index')->with('success','Sorry. You have a fee balance.');
        }
        else
        {
            //check attendance records
        }
        return view('examcards.index', compact('user'));
    }

    public function sendNotification()
    {
        $user = Auth::user();
        Mail::to($user)->send(new ExamCardNotification());
    }

    public function download()
    {
        $courses = Util::get_course_units();
        $user = User::find(Auth::user()->id);

        return view('examcards.download', compact('user', 'courses'));
    
    }
}
