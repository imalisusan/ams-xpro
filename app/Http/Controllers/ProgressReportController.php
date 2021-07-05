<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\CourseMark;
use App\Models\CourseUser;
use App\Models\CourseModule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Util;
use Barryvdh\DomPDF\Facade as PDF;

class ProgressReportController extends Controller
{
    public function index(Request $request)
    {
        $courses = Util::get_course_units();
        $gpa = Util::get_gpa();
        $gpa_grade = Util::get_grade($gpa);
        return view('progressreports.index', compact('courses', 'gpa', 'gpa_grade'));

    }

    public function pdfexport(User $user)
    {
        $courses = Util::get_course_units();
        $gpa = Util::get_gpa();
        $gpa_grade = Util::get_grade($gpa);

        $pdf = PDF::loadView('progressreports.pdf', compact('courses', 'gpa', 'gpa_grade'));
        return $pdf->download('progressreport.pdf');
    }
}
