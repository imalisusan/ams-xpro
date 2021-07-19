<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\Course;
use App\Models\Attendance;
use App\Models\CourseMark;
use App\Models\CourseUser;
use App\Models\CourseModule;
use Illuminate\Support\Facades\Auth;



class Util {

    public static function get_course_units()
     {
        $course_users = CourseUser::where('user_id', Auth::user()->id)->get();
        foreach($course_users as $course_user)
        {
            $course_user = Course::find($course_user->course_id);
        }
         return $course_users;
     }

     public static function get_grade($mark)
     {
        switch ($mark) {
            case ($mark >= 70):
                $grade = "A";
                break;
            case ($mark >= 60):
                $grade = "B";
                break;
            case ($mark >= 50):
                $grade = "C";
                break;
            case ($mark >= 40):
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

     public static function get_gpa()
     {
         
        $gpa_total = Util::get_gpa_total();
        $courses = Util::get_coursemarks();
        $no_of_courses = count($courses);
        $gpa = $gpa_total / $no_of_courses;
        $gpa = number_format((float)$gpa, 2, '.', ''); 
        return $gpa;
    
     }
     public static function get_courses_count()
     {
        $courses = Util::get_coursemarks();
        $no_of_courses = count($courses);

        return $no_of_courses;
     }

     public static function get_gpa_total()
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

     static public function get_courseattendance()
     {
        $courses = CourseUser::where('user_id', Auth::user()->id)->get();
        foreach ($courses as $course) 
        {
            $attendancerecords = Attendance::where([
                ['course_id', $course->course_id],
                ['user_id', Auth::user()->id],
            ])->get();
            $total_present = NULL;
            $total_absent = NULL;
            if($attendancerecords)
                {
                    foreach($attendancerecords as $attendancerecord)
                    {
                        if($attendancerecord->status == "Present")
                        {
                            $total_present = $total_present + $attendancerecord['total_hours'];
                            $course['present_hours'] = $total_present; 
                        }
                        else
                        {
                            $total_absent = $total_absent + $attendancerecord['total_hours'];
                            $course['absent_hours'] = $total_absent; 
                        }

                    }
                    $course['total_hours'] =  $course['present_hours'] +  $course['absent_hours'];

                        $course['absent_classes'] = Attendance::where([
                            ['course_id', $course->course_id],
                            ['status',  '=',"Absent"],
                            ['user_id', Auth::user()->id]
                   ])->count();

                   if( $course['absent_classes'] > 0 )
                   {
                  
                    $course['percent_absent'] =  ( $course['absent_hours'] /  $course['total_hours'] ) * 100;
                    $course['percent_absent'] = number_format((float)$course['percent_absent'], 2, '.', ''); 
                   
                   } 
                }
        } 
        
        return $courses;
        
     }

     static public function get_gpa_grade($gpa)
     {
        $gpa_grade = Util::get_grade($gpa);
        return $gpa_grade;
     }


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

     static public function get_student_attendance(Course $course, User $user)
     {
            $attendancerecords = Attendance::where([
                ['course_id', $course->id],
                ['user_id', $user->id],
            ])->get();

        return $attendancerecords;
        
     }

     static public function get_attendance_percentage(Course $course, User $user)
     {
            $attendancerecords = Util::get_student_attendance($course, $user);
            $total_present = NULL;
            $total_absent = NULL;
            if($attendancerecords)
                {
                    foreach($attendancerecords as $attendancerecord)
                    {
                        if($attendancerecord->status == "Present")
                        {
                            $total_present = $total_present + $attendancerecord['total_hours'];
                            $course['present_hours'] = $total_present; 
                        }
                        else
                        {
                            $total_absent = $total_absent + $attendancerecord['total_hours'];
                            $course['absent_hours'] = $total_absent; 
                        }
 
                    }
                    $course['total_hours'] =  $course['present_hours'] +  $course['absent_hours'];
 
                        $course['absent_classes'] = Attendance::where([
                            ['course_id', $course->id],
                            ['status',  '=',"Absent"],
                            ['user_id', $user->id]
                   ])->count();
 
                   if( $course['absent_classes'] > 0 )
                   {
                  
                    $course['percent_absent'] =  ( $course['absent_hours'] /  $course['total_hours'] ) * 100;
                    $course['percent_absent'] = number_format((float)$course['percent_absent'], 2, '.', ''); 
                   
                   } 
                   if( $course['percent_absent'] == NULL)
                   {
                    $course['percent_absent'] = 0;
                   }
                }
                $course = (object)$course;
 
        return $course;
        
     }

     static public function get_coursemarks_year($year)
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
                            ['created_at','=', $year]
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

     
    }
