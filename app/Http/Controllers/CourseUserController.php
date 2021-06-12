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
        CourseUser::create($validated);
     
        return redirect()->route('courses.index')->with('success','You\'ve registered for the course successfully.');
    }
     
}
