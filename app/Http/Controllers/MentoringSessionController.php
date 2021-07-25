<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\MentorUser;
use Illuminate\Http\Request;
use App\Models\MentoringSession;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMentoringSessionRequest;

class MentoringSessionController extends Controller
{
    public function index(Request $request)
    {
        $mentoringsessions = MentoringSession::latest()->paginate(20);

        return view('mentoringsessions.index', compact('mentoringsessions'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        $user_id = Auth::user()->id;
        $mentor = MentorUser::where('user_id', $user_id)->first();

        return view('mentoringsessions.create', compact('mentor'));
    }
    
    public function store(StoreMentoringSessionRequest $request)
    {
        $validated = $request->validated();
        $mentoringsession = MentoringSession::create($validated);
     
        return redirect()->route('mentoringsessions.show', $mentoringsession->id)->with('success','MentoringSession created successfully.');
    }
     
    public function show(MentoringSession $mentoringsession)
    {
        return view('mentoringsessions.show',compact('mentoringsession'));
    } 
     
    public function edit(MentoringSession $mentoringsession)
    {
        $mentoringsessions = Course::all();
        return view('mentoringsessions.edit',compact('mentoringsession', 'mentoringsessions'));
    }
    
 
    public function update(StoreMentoringSessionRequest $request, MentoringSession $mentoringsession)
    {
        $mentoringsession->update($request->validated());
        return redirect()->route('mentoringsessions.show', $mentoringsession->id)->with('success','MentoringSession updated successfully');
    }
   
    public function destroy(MentoringSession $mentoringsession)
    {
        $mentoringsession->delete();
    
        return redirect()->route('student.profile')->with('success','MentoringSession deleted successfully');
    }
}
