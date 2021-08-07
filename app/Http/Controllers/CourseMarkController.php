<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\CourseMark;
use App\Mail\NewCourseMark;
use App\Models\CourseModule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreCourseMarkRequest;

class CourseMarkController extends Controller
{
    public function index(Request $request)
    {
        $coursemarks = CourseMark::latest()->paginate(20);

        return view('coursemarks.index', compact('coursemarks'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create(Course $course)
    {
        $coursemodules = CourseModule::where('course_id', $course->id)->get();
        $users = User::all();
        return view('coursemarks.create', compact('coursemodules', 'users', 'course'));
    }
    
    public function store(StoreCourseMarkRequest $request)
    {
        $validated = $request->validated();
        $course = Course::find($validated['course_id']);
        foreach ($validated['scores'] as $user_id => $score) {
            $user = User::find($user_id);
            $coursemodule = CourseModule::find($validated['course_module_id']);
            if($score > $coursemodule->maximum_score)
            {
                return redirect()->back()->withInput()->withErrors(["Please input the correct values for {$coursemodule->name}. Maximum score is  {$coursemodule->maximum_score}" ]);
            }
            else{

                $existing_mark = CourseMark::where([
                    'course_id' => $course->id,
                    'user_id' => $user->id,
                    'course_module_id' => $coursemodule->id
                    ])->first();

                if(empty($existing_mark))
                {
                    CourseMark::create([
                        'course_id' => $validated['course_id'],
                        'course_module_id' => $validated['course_module_id'],
                        'user_id' => $user_id,
                        'score' => $score,
                    ]);
        
                // Mail::to($user->email)->send(new NewCourseMark($user, $course));
                }
                else
                {
                    return redirect()->route('courses.show', $validated['course_id'])->with('danger','CourseMarks already exist.');
                }

          
        }
        }
     
        return redirect()->route('courses.show', $validated['course_id'])->with('success','CourseMarks added successfully.');
    }
     
    public function show(CourseMark $coursemark)
    {
        return view('coursemarks.show',compact('coursemark'));
    } 
     
    public function edit(CourseMark $coursemark)
    {
        $coursemodules = CourseModule::where('course_id', $coursemark->course->id)->get();
        $users = User::all();
        return view('coursemarks.edit',compact('coursemark', 'coursemodules', 'users'));
    }
    
 
    public function update(StoreCourseMarkRequest $request, CourseMark $coursemark)
    {
        $validated = $request->validated();

        $coursemodule = CourseModule::find($validated['course_module_id']);
        $course_id = $validated['course_id'];
        $course = Course::find($course_id);
        foreach ($validated['scores'] as $user_id => $score) 
        {
            $user = User::find($user_id);
           
            if($score > $coursemodule->maximum_score)
            {
                return redirect()->back()->withInput()->withErrors(["Please input the correct values for {$coursemodule->name}. Maximum score is  {$coursemodule->maximum_score}" ]);
            }
            else
            {
                $coursemark = CourseMark::where([
                    ['course_id', $course_id],
                    ['course_module_id', $coursemodule->id],
                    ['user_id', $user_id]
                ])->first();
              
                $validated = new CourseMark;
                $validated->course_id = $course_id;
                $validated->course_module_id = $coursemodule->id;
                $validated->user_id = $user_id;
                $validated->score = $score;
            $coursemark->update($validated->toArray());

           Mail::to($user->email)->send(new NewCourseMark($user, $course));
            }
        }

        return redirect()->route('courses.show', $coursemark->course_id)->with('success','CourseMarks updated successfully');
    }
   
    public function destroy(CourseMark $coursemark)
    {
        $coursemark->delete();
    
        return redirect()->route('coursemarks.index')->with('success','CourseMark deleted successfully');
    }
}
