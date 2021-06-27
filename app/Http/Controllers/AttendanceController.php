<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Helpers\Util;
use App\Models\Course;
use App\Models\Attendance;
use App\Models\CourseUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAttendanceRequest;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        $courses = Util::get_courseattendance();
        return view('attendance.index', compact( 'courses'));
    }
     
    public function create(Course $course)
    {
        $users = User::all();
        return view('attendance.create', compact('users', 'course'));
    }
    public function store(StoreAttendanceRequest $request)
    {
        $validated = $request->validated();
        Attendance::create($validated);
     
        return redirect()->route('courses.show', $validated['course_id'])->with('success','Attendance added successfully.');
    }

    public function show(Attendance $attendance)
    {
        return view('attendance.show',compact('attendance'));
    } 

    public function edit(Attendance $attendance)
    {
        
    }
    
 
    public function update(StoreCourseRequest $request, Attendance $attendance)
    {
        
    }
   
    public function destroy(Attendance $attendance)
    {
       
    }



    
}
