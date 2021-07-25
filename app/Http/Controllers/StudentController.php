<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Degree;
use App\Models\MentorUser;
use App\Mail\ResetPassword;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\MentoringSession;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreStudentRequest;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        return view('students.index');
    }

    public function create()
    {
        $degrees = Degree::all();
        return view('students.create', compact('degrees'));
    }

    public function store(StoreStudentRequest $request)
    {
        $validated = $request->validated();

        $saved = User::where('email', $validated['email'])->first();
        if ($saved != null) {
            return redirect()->route('students.index')->with('success','Sorry. The student already exists.');
        } else {
            $validated['password'] = Hash::make(Str::random());
            $user = User::create($validated);
            $user->attachRole('student');

           // Mail::to($user->email)->send(new ResetPassword($user));
        }


        return redirect()->route('students.index')->with('success','Student created successfully.');
    }
    
    public function show()
    {
        $user = Auth::user();

        $mentor = MentorUser::where('user_id', $user->id)->first();

        $sessions = MentoringSession::where([
            ['user_id', $mentor->user_id],
            ['mentor_id', $mentor->mentor_id],
        ])->get();
    
        return view('students.profile', compact('user', 'sessions', 'mentor'));
    }

    public function edit(User $user)
    {
        $student = $user;
        return view('students.edit',compact('student'));
    }


    public function update(StoreStudentRequest $request, User $user)
    {
        $mentor->update($request->validated());
        return redirect()->route('students.profile')->with('success','Student updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('students.index')->with('success','Student deleted successfully');
    }
}
