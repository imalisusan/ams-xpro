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
          $user = User::find($student->user_id);
          $marks = LecturerUtil::get_student_coursemarks($course, $user);
                }
       return $students;
       
    }

}