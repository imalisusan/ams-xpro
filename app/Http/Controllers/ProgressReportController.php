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
        $courses = Util::get_coursemarks();
        $gpa = Util::get_gpa();
        $gpa_grade = Util::get_grade($gpa);
        $gpa_total = Util::get_gpa_total();
        $courses_count = Util::get_courses_count();
        return view('progressreports.pdf', compact('courses', 'gpa', 'gpa_grade', 'gpa_total', 'courses_count'));

    }

    public function pdfexport(User $user)
    {
        $courses = Util::get_coursemarks();
        $gpa = Util::get_gpa();
        $gpa_grade = Util::get_grade($gpa);

        $progressreport = PDF::loadView('progressreports.pdf', compact('courses', 'gpa', 'gpa_grade'));
        return $progressreport->download('progressreport');
    }

    public function twenty_19(Request $request)
    {
        $fee_statement = FeeStatement::where('created_at', "Debit")->get();
        return view('feestatements.index', compact('fee_statement'))->with('fee_statement', $fee_statement);
    }

    public function twenty_20(Request $request)
    {
        $fee_statement = FeeStatement::where('created_at', "Credit")->get();
        return view('feestatements.index', compact('fee_statement'))->with('fee_statement', $fee_statement);
    }

}
