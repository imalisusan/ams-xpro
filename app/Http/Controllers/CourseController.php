<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Helpers\Util;
use App\Models\Course;
use App\Models\Attendance;
use App\Models\CourseMark;
use App\Models\CourseUser;
use App\Models\CourseModule;
use Illuminate\Http\Request;
use App\Helpers\LecturerUtil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreCourseRequest;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::latest()->paginate(20);

        return view('courses.index', compact('courses'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(StoreCourseRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        Course::create($validated);

        return redirect()->route('courses.index')->with('success','Course created successfully.');
    }

    public function show(Request $request, Course $course)
    {
        $coursemodules = CourseModule::where('course_id', $course->id)->get();
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
                    $total += $marks;
                    $total = number_format((float)$total, 2, '.', '');
                }

            }
        }

        $attendances = LecturerUtil::get_students_attendance($course);
        $students = CourseUser::where('course_id', $course->id)->get();
       
        
       // dd($students);
        return view('courses.show', compact('course', 'coursemodules', 'total', 'attendances', 'students'));
    } 
     
    public function edit(Course $course)
    {
        return view('courses.edit',compact('course'));
    }


    public function update(StoreCourseRequest $request, Course $course)
    {
        $course->update($request->validated());
        return redirect()->route('courses.show', $course->id)->with('success','Course updated successfully');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success','Course deleted successfully');
    }

   
}
