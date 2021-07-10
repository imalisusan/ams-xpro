<?php

namespace App\Helpers;

use App\Helpers\Util;
use App\Models\Course;
use App\Models\Attendance;
use App\Models\CourseMark;
use App\Models\CourseUser;
use App\Models\CourseModule;
use App\Helpers\LecturerUtil;
use Illuminate\Support\Facades\Auth;



class LecturerUtil {

    public static function get_students_attendance(Course $course)
    {
        $studentrecords = CourseUser::where('course_id', $course->id)->get();
        foreach($studentrecords as $studentrecord)
        {
            
            $attendancerecords = Attendance::where([
                ['course_id', $studentrecord->course_id],
                ['user_id', $studentrecord->user_id]
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
                            $studentrecord['present_hours'] = $total_present; 
                        }
                        else
                        {
                            $total_absent = $total_absent + $attendancerecord['total_hours'];
                            $studentrecord['absent_hours'] = $total_absent; 
                        }

                    }
                    $studentrecord['total_hours'] =  $studentrecord['present_hours'] +  $studentrecord['absent_hours'];

                        $studentrecord['absent_classes'] = Attendance::where([
                            ['course_id', $studentrecord->course_id],
                            ['status',  '=',"Absent"],
                            ['user_id', $studentrecord->user_id]
                   ])->count();

                   if( $studentrecord['absent_classes'] > 0 )
                   {
                  
                    $studentrecord['percent_absent'] =  ( $studentrecord['absent_hours'] /  $studentrecord['total_hours'] ) * 100;
                   
                   } 
                }
        
        }
        return $studentrecords;
    }

    static public function get_students_coursemarks(Course $course)
    {
       $students = CourseUser::where('course_id', $course->id)->get();
       foreach($students as $student)
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
       return $studentmarks;
       
    }
}