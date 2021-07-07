<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lecturer;
use App\Models\CourseModule;
use Illuminate\Http\Request;
use App\Models\CourseLecturer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCourseModuleRequest;

class CourseModuleController extends Controller
{
    public function index(Request $request)
    {
        $coursemodules = CourseModule::latest()->paginate(20);

        return view('coursemodules.index', compact('coursemodules'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        $user_id = Auth::user()->id;
        $lecturer = Lecturer::where('user_id', $user_id)->first();
        $courses = CourseLecturer::query()->where('lecturer_id', $lecturer->id)->get();

        return view('coursemodules.create', compact('courses'));
    }
    
    public function store(StoreCourseModuleRequest $request)
    {
        $validated = $request->validated();
        $course = CourseModule::create($validated);
     
        return redirect()->route('coursemodules.show', $course->id)->with('success','CourseModule created successfully.');
    }
     
    public function show(CourseModule $coursemodule)
    {
        return view('coursemodules.show',compact('coursemodule'));
    } 
     
    public function edit(CourseModule $coursemodule)
    {
        $courses = Course::all();
        return view('coursemodules.edit',compact('coursemodule', 'courses'));
    }
    
 
    public function update(StoreCourseModuleRequest $request, CourseModule $coursemodule)
    {
        $coursemodule->update($request->validated());
        return redirect()->route('coursemodules.show', $coursemodule->id)->with('success','CourseModule updated successfully');
    }
   
    public function destroy(CourseModule $coursemodule)
    {
        $coursemodule->delete();
    
        return redirect()->route('coursemodules.index')->with('success','CourseModule deleted successfully');
    }
}
