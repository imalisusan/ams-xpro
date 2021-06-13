<?php

namespace App\Http\Controllers;

use App\Models\CourseModule;
use App\Models\CourseMark;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseMarkRequest;

class CourseMarkController extends Controller
{
    public function index(Request $request)
    {
        $coursemarks = CourseMark::latest()->paginate(20);

        return view('coursemarks.index', compact('coursemarks'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        $coursemodules = CourseModule::all();
        return view('coursemarks.create', compact('coursemodules'));
    }
    
    public function store(StoreCourseMarkRequest $request)
    {
        $validated = $request->validated();
        CourseMark::create($validated);
     
        return redirect()->route('coursemarks.index')->with('success','CourseMark created successfully.');
    }
     
    public function show(CourseMark $coursemark)
    {
        return view('coursemarks.show',compact('coursemark'));
    } 
     
    public function edit(CourseMark $coursemark)
    {
        $coursemodules = CourseModule::all();
        return view('coursemarks.edit',compact('coursemark', 'coursemodules'));
    }
    
 
    public function update(StoreCourseMarkRequest $request, CourseMark $coursemark)
    {
        $coursemark->update($request->validated());
        return redirect()->route('coursemarks.show', $coursemark->id)->with('success','CourseMark updated successfully');
    }
   
    public function destroy(CourseMark $coursemark)
    {
        $coursemark->delete();
    
        return redirect()->route('coursemarks.index')->with('success','CourseMark deleted successfully');
    }
}
