<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Helpers\Util;
use App\Models\Course;
use App\Models\Attendance;
use App\Models\CourseUser;
use App\Mail\ResetPassword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreCourseRequest;
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

        foreach ($validated['statuss'] as $user_id => $status) {
            $user = User::find($user_id);
            Attendance::create([
                'course_id' => $validated['course_id'],
                'date_time' => $validated['date_time'],
                'total_hours' => $validated['total_hours'],
                'user_id' => $user_id,
                'status' => $status,
            ]);
          
        }
     

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
