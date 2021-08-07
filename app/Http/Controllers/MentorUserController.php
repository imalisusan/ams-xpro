<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mentor;
use App\Models\MentorUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MentorUserController extends Controller
{
    public function store(Request $request, User $user)
    {
        $validated = $request->input();
        $user_id = Auth::user()->id;
        $mentor = Mentor::where('user_id', $user_id)->first();
        $validated['mentor_id'] = $mentor->id;
        $validated['user_id'] = $user->id;
        $saved = MentorUser::where([
            ['user_id', '=', $validated['user_id']],
            ['mentor_id', '=', $validated['mentor_id']],
        ])->first();
        if($saved == NULL)
        {
            $user_count = MentorUser::where('mentor_id', $validated['mentor_id'])->count();
            if($user_count == 3)
            {
                return redirect()->route('students.index')->with('success','Sorry. You can\'t register to mentor more than three students.');
            }
            else
            {
                MentorUser::create($validated);
     
                return redirect()->route('students.index')->with('success','You\'ve registered to mentor this student successfully.');
            } 
        }
        else
        { 
            return redirect()->route('students.index')->with('success','You\'re already registered to mentor this student.');
        }
        
    }
    
    public function mentees(Request $request)
    {
        return view('mentors.mentees');
     
    }
}
