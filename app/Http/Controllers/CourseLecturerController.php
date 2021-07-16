<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use App\Models\CourseLecturer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CourseLecturerController extends Controller
{
    public function store(Request $request, Course $course)
    {
        $validated = $request->input();
        $user_id = Auth::user()->id;
        $lecturer = Lecturer::where('user_id', $user_id)->first();
        $validated['lecturer_id'] = $lecturer->id;
        $validated['course_id'] = $course->id;
        $saved = CourseLecturer::where([
            ['course_id', '=', $validated['course_id']],
            ['lecturer_id', '=', $validated['lecturer_id']],
        ])->first();
        if($saved == NULL)
        {
            $course_count = CourseLecturer::where('lecturer_id', $validated['lecturer_id'])->count();
            if($course_count == 3)
            {
                return redirect()->route('courses.index')->with('success','Sorry. You can\'t register to teach more than three courses.');
            }
            else
            {
                CourseLecturer::create($validated);
     
                return redirect()->route('courses.index')->with('success','You\'ve registered to teach this course successfully.');
            } 
        }
        else
        { 
            return redirect()->route('courses.index')->with('success','You\'re already registered to teach this course.');
        }
        
    }

    public function teach_courses(Request $request)
    {
        return view('courses.teach');
     
    }
     
}
