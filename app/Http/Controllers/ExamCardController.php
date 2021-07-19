<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Helpers\Util;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Mail\ExamCardNotification;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ExamCardController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $balance = $user->fee_balance();
   
        return view('examcards.index');
    }

    public function sendNotification()
    {
        $user = Auth::user();
        Mail::to($user)->send(new ExamCardNotification());
    }

    public function download()
    {
        $user = User::find(Auth::user()->id);

        $courses = Util::get_course_units();
        foreach($courses as $course)
        {
            $course_unit = Course::find($course->course_id);
            $attendance_percentage = Util::get_attendance_percentage($course_unit, $user);
            $percent_absent =  $attendance_percentage['percent_absent'];
            if($percent_absent > 23)
            {
                $course['status'] = 0;
            }
            else
            {
                $course['status'] = 1;
            }
        }

        return view('examcards.download', compact('user', 'courses'));
    
    }
}
