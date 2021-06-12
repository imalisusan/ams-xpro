<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
     
    public function show(Course $course)
    {
        return view('courses.show',compact('course'));
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
