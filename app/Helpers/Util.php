<?php

namespace App\Helpers;

use App\Helpers\Util;
use App\Models\CourseMark;
use App\Models\CourseUser;
use App\Models\CourseModule;
use Illuminate\Support\Facades\Auth;



class Util {
    static public function get_coursemarks()
     {
        $courses = CourseUser::where('user_id', Auth::user()->id)->get();
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

     static public function get_grade($mark)
     {
        switch ($mark) {
            case ($mark > 69):
                $grade = "A";
                break;
            case ($mark > 59):
                $grade = "B";
                break;
            case ($mark > 49):
                $grade = "C";
                break;
            case ($mark > 39):
                $grade = "D";
                break;
            case ($mark < 40):
                $grade = "E";
                break;
                    
            default:
                $grade = "Null";
                break;
        }

        return $grade;
        
     }

     static public function get_gpa()
     {
        $gpa_total = Util::get_gpa_total();
        $courses = Util::get_coursemarks();
        $no_of_courses = count($courses);
        $gpa = $gpa_total / $no_of_courses;
        return $gpa;
     }

     static public function get_gpa_grade($gpa)
     {
        $gpa_grade = Util::get_grade($gpa);
        return $gpa_grade;
     }

     static public function get_gpa_total()
     {
        $courses = CourseUser::where('user_id', Auth::user()->id)->get();
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

    }