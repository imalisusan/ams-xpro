<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
use App\Models\Course;
use App\Models\CourseUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAttendanceRequest;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::all();
        foreach($courses as $course)
        $attendances = Attendance::all();
        foreach($attendances as $attendance)
        {
            $attendance["absent_classes"] = 0.0;
            $attendance["total_hours"] = 0.0;
            $attendance["percentage_absent"] = 0.0;
            $attendance["absent_hrs"] = 0.0;
        }
        return view('attendance.index', compact('attendances', 'courses'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    public function create(User $user)
    {
        return view('attendance.create', compact('user'));
    }
    public function store(StoreAttendanceRequest $request, User $user)
    {
       
        $validated = $request->validated();
        dd($validated);
        Attendance::create($validated);
     
        return redirect()->route('attendance.index')->with('success','Attendance created successfully.');
    }

    public function mark($id)
    {
        $user = User::find($id);
        return view('attendance.create', compact('user'));
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
