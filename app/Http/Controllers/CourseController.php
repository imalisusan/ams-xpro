<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Attendance;
use App\Models\CourseMark;
use App\Models\CourseModule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
    
    public function store(StoreCourseRequest $request)
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
                    $total = $total + $marks;
                    $total = number_format((float)$total, 2, '.', ''); 
                }
               
            }
        }

        $attendances = Attendance::where([
            ['user_id', Auth::user()->id],
            ['course_id', $course->id],
        ])->get();
        return view('courses.show', compact('course', 'coursemodules', 'total', 'attendances'));
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
