<?php

namespace App\Helpers;

use App\Models\User;
use App\Helpers\Util;
use App\Models\Course;
use App\Models\Attendance;
use App\Models\CourseMark;
use App\Models\CourseUser;
use App\Models\CourseModule;
use App\Helpers\LecturerUtil;
use Illuminate\Support\Facades\Auth;



class CourseMarkUtil {

    static public function get_coursemarks($year)
    {
        $courses = CourseUser::where('user_id', Auth::user()->id)->whereYear('created_at', '=', $year)->get();
       $gpa_total = NULL; 
       $gpa = NULL;
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
                       if($coursemark)
                       {
                           $coursemodule['score'] = $coursemark->score;
                           $marks =  ($coursemodule['score'] * ( $coursemodule['weight'] * 100)) /  $coursemodule['maximum_score'];
                           $total = $total + $marks;
                           $course['total'] = number_format((float)$total, 2, '.', ''); 
                           $course['grade'] = Util::get_grade($course['total']);
                       }
                   }
                   $gpa_total = $gpa_total + $course['total']; 
               }
       } 
       
       return $courses;
       
    }

    public static function get_gpa_total()
    {
       $courses = CourseUser::where('user_id', Auth::user()->id)->whereYear('created_at', '=', $year)->get();
       $gpa_total = NULL; 
       $gpa = NULL;
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
                       if($coursemark)
                       {
                           $coursemodule['score'] = $coursemark->score;
                           $marks =  ($coursemodule['score'] * ( $coursemodule['weight'] * 100)) /  $coursemodule['maximum_score'];
                           $total = $total + $marks;
                           $course['total'] = number_format((float)$total, 2, '.', ''); 
                           $course['grade'] = Util::get_grade($course['total']);
                       }
                   }
                   $gpa_total =  $gpa_total + $course['total']; 
               }
       } 
       return  $gpa_total;
    }

    public static function get_gpa()
     {
         
        $gpa_total = CourseMarkUtil::get_gpa_total();
        $courses = CourseMarkUtil::get_coursemarks();
        $no_of_courses = count($courses);
        $gpa = $gpa_total / $no_of_courses;
        $gpa = number_format((float)$gpa, 2, '.', ''); 
        return $gpa;
    
     }

     public static function get_courses_count()
     {
        $courses = CourseMarkUtil::get_coursemarks();
        $no_of_courses = count($courses);

        return $no_of_courses;
     }


}