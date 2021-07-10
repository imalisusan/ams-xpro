<?php

namespace App\Models;

use App\Helpers\Util;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }
    
    public function course_marks()
    {
        return $this->hasMany(CourseMark::class);
    }

    public function get_student_coursemarks($course_id, $user_id)
    {
        $course = Course::find($course_id);
        $user = User::find($user_id);
           $coursemodules = CourseModule::where('course_id', $course->id)->get();
           $total = NULL;
           if($coursemodules)
               {
                foreach ($coursemodules as $coursemodule) {
                       $coursemark = CourseMark::where([
                           ['course_module_id', '=', $coursemodule->id],
                           ['user_id', '=', $user->id],
                       ])->first();
                       if($coursemark)
                       {
                           $coursemodule['score'] = $coursemark->score;
                           $coursemodule['marks'] =  ($coursemodule['score'] * ( $coursemodule['weight'] * 100)) /  $coursemodule['maximum_score'];
                           $total = $total + $coursemodule['marks']; 
                       }
                   }
               }
       return $coursemodules;
       
    }

    public function get_student_grademarks($course_id, $user_id)
    {
        $course = Course::find($course_id);
        $user = User::find($user_id);
        $coursemark = NULL;
           $coursemodules = CourseModule::where('course_id', $course->id)->get();
           $total = NULL;
           if($coursemodules)
               {
                foreach ($coursemodules as $coursemodule) {
                       $coursemark = CourseMark::where([
                           ['course_module_id', '=', $coursemodule->id],
                           ['user_id', '=', $user->id],
                       ])->first();
                       if($coursemark)
                       {
                           $coursemodule['score'] = $coursemark->score;
                           $coursemodule['marks'] =  ($coursemodule['score'] * ( $coursemodule['weight'] * 100)) /  $coursemodule['maximum_score'];
                           $total = $total + $coursemodule['marks']; 
                       }
                   }
                   $coursemark['total'] = number_format((float)$total, 2, '.', ''); 
                   $coursemark['grade'] = Util::get_grade($coursemark['total']);
               }
       return $coursemark;
       
    }
}
