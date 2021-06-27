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
        $attendances = Attendance::all();
        foreach($attendances as $attendance)
        {
            $attendance["absent_classes"] = 0.0;
            $attendance["total_hours"] = 0.0;
            $attendance["percentage_absent"] = 0.0;
            $attendance["absent_hrs"] = 0.0;
        }
        $courses = Course::all();
        //dd($attendances);
        return view('attendance.index', compact('attendances', 'courses'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    public function create()
    {
        $courseusers = CourseUser::all();
        return view('attendance.create', compact('courseusers'));
    }
    public function store(StoreAttendanceRequest $request)
    {
        $validated = $request->validated();
        Attendance::create($validated);
     
        return redirect()->route('attendance.index')->with('success','Attendance created successfully.');
    }
    public function register()
    {
        return view('attendance.register');
    }
    
}
