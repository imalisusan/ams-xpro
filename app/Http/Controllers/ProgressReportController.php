<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Helpers\Util;
use App\Models\Course;
use App\Models\CourseMark;
use App\Models\CourseUser;
use App\Models\CourseModule;
use App\Models\FeeStatement;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class ProgressReportController extends Controller
{
    public function index(Request $request)
    {
        $courses = Util::get_coursemarks();
        $gpa = Util::get_gpa();
        $gpa_grade = Util::get_grade($gpa);
        $gpa_total = Util::get_gpa_total();
        $courses_count = Util::get_courses_count();
        return view('progressreports.index', compact('courses', 'gpa', 'gpa_grade', 'gpa_total', 'courses_count'));

    }

    public function pdfexport(User $user)
    {
        $courses = Util::get_coursemarks();
        $gpa = Util::get_gpa();
        $gpa_grade = Util::get_grade($gpa);
        $gpa_total = Util::get_gpa_total();
        $courses_count = Util::get_courses_count();

        $progressreport = PDF::loadView('progressreports.pdf', compact('courses', 'gpa', 'gpa_grade', 'gpa_total', 'courses_count'));
        return $progressreport->download('progressreport');
    }

    public function report_year(Request $request, int $year)
    {
        $courses = Util::get_coursemarks_year($year);
        $gpa = Util::get_gpa();
        $gpa_grade = Util::get_grade($gpa);
        $gpa_total = Util::get_gpa_total();
        $courses_count = Util::get_courses_count();
        return view('progressreports.index', compact('courses', 'gpa', 'gpa_grade', 'gpa_total', 'courses_count'));
    }

}
