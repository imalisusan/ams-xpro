<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CourseUserController extends Controller
{
   
    public function store(Request $request, Course $course)
    {
        $validated = $request->input();
        $user_id = Auth::user()->id;
        $validated['user_id'] = $user_id;
        $validated['course_id'] = $course->id;
        $saved = CourseUser::where([
            ['course_id', '=', $validated['course_id']],
            ['user_id', '=', $validated['user_id']],
        ])->first();
        if($saved == NULL)
        {
            CourseUser::create($validated);
     
            return redirect()->route('courses.index')->with('success','You\'ve registered for the course successfully.');
        }
        else
        {
            return redirect()->route('courses.index')->with('success','You\'re already registered for this course.');
        }
        
    }

    public function registered_courses(Request $request)
    {
        return view('courses.personal');
     
    }
     
}
