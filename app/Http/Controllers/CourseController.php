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
     
    public function show(Request $request, Course $course)
    {
        return view('courses.show', compact('course'));
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

    public function show_students(Request $request)
    {
        if ($request->ajax()) {
            $users = User::all();

            return DataTables::of($employees)
                ->addIndexColumn()
                ->addColumn('action', function ($user) {
                    //$show_action = '<a href='.route('user.show', $employee->id)." class='hover:no-underline mx-1 px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none'>View</a>";
                    //$edit_action = '<a href='.route('employees.edit', $employee->id)." class='hover:no-underline mx-1 px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none'>Edit</a>";

                    //return $show_action.' '.$edit_action;
                })
                ->addColumn('created_at', function ($user) {
                    return $user->created_at->toDayDateTimeString();
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('courses.show');
    }
}
