<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseUser;
use Illuminate\Http\Request;
use App\Models\CourseMark;
use App\Models\CourseModule;
use Illuminate\Support\Facades\Auth;


class ProgressReportController extends Controller
{
    public function index(Request $request)

    {
        $courses = CourseUser::where('user_id', Auth::user()->id)->get();
        foreach ($courses as $course) 
        {
            $coursemodules = CourseModule::where('course_id', $course->course_id)->get();
            $total = NULL;
            if($coursemodules)
                {
                    foreach($coursemodules as $coursemodule)
                    {
                        $coursemark = CourseMark::where([
                            ['course_module_id', '=', $coursemodule->id],
                            ['user_id', '=', Auth::user()->id],
                        ])->first();
                        dd($coursemark);
                        if($coursemark)
                        {
                            $coursemodule['score'] = $coursemark->score;
                            $marks =  ($coursemodule['score'] * ( $coursemodule['weight'] * 100)) /  $coursemodule['maximum_score'];
                            $total = $total + $marks;
                            $course['total'] = number_format((float)$total, 2, '.', ''); 
                            //$total = number_format((float)$total, 2, '.', ''); 
                            
                        }
                    }
                }
            //dd($total);
            //dd($course);
        }
        return view('progressreports.index', compact('courses'));
        
    }
    
}
