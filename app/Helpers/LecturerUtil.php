<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\Course;
use App\Models\Attendance;
use App\Models\CourseUser;



class LecturerUtil
{

    public static function get_students_attendance(Course $course)
    {
        $studentRecords = CourseUser::where('course_id', $course->id)->get();
        foreach ($studentRecords as $studentRecord) {

            $attendanceRecords = Attendance::where([
                ['course_id', $studentRecord->course_id],
                ['user_id', $studentRecord->user_id]
            ])->get();
            $total_present = NULL;
            $total_absent = NULL;
            if ($attendanceRecords) {
                foreach ($attendanceRecords as $attendancerecord) {
                    if ($attendancerecord->status == "Present") {
                        $total_present = $total_present + $attendancerecord['total_hours'];
                        $studentRecord['present_hours'] = $total_present;
                    } else {
                        $total_absent = $total_absent + $attendancerecord['total_hours'];
                        $studentRecord['absent_hours'] = $total_absent;
                    }
                }
                $studentRecord['total_hours'] =  $studentRecord['present_hours'] +  $studentRecord['absent_hours'];

                $studentRecord['absent_classes'] = Attendance::where([
                    ['course_id', $studentRecord->course_id],
                    ['status',  '=', "Absent"],
                    ['user_id', $studentRecord->user_id]
                ])->count();

                if ($studentRecord['absent_classes'] > 0) {

                    $studentRecord['percent_absent'] =  ($studentRecord['absent_hours'] /  $studentRecord['total_hours']) * 100;
                }
            }
        }
        return $studentRecords;
    }

    static public function get_students_coursemarks(Course $course)
    {
        $students = CourseUser::where('course_id', $course->id)->get();
        foreach ($students as $student) {
            $user = User::find($student->user_id);
            $marks = LecturerUtil::get_student_coursemarks($course, $user);
        }
        return $students;
    }

    private static function get_student_coursemarks(Course $course, User $user): int
    {
        return 0;
    }
}
