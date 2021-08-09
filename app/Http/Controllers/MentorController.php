<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mentor;
use App\Mail\ResetPassword;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreMentorRequest;

class MentorController extends Controller
{
    public function index(Request $request)
    {
        $mentors = Mentor::latest()->paginate(20);

        return view('mentors.index', compact('mentors'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('mentors.create');
    }

    public function store(StoreMentorRequest $request)
    {
        $validated = $request->validated();
        $user_id = Auth::user()->id;
        $validated['user_id'] = $user_id;
        $validated['degree_id'] = 16;

        $saved = User::where('email', $validated['email'])->first();
        if ($saved != null) {
            $validated['user_id'] = $saved->id;
            $widow = Mentor::create($validated);
            $saved->attachRole('mentor');
        } else {
            $validated['password'] = Hash::make(Str::random());
            $user = User::create($validated);
            $user->attachRole('mentor');

            $validated['user_id'] = $user->id;
            Mentor::create($validated);

           // Mail::to($user->email)->send(new ResetPassword($user));
        }


        return redirect()->route('mentors.index')->with('success','Mentor created successfully.');
    }

    public function show(Request $request, Mentor $mentor)
    {
        return view('mentors.show', compact('mentor'));
    } 
     
    public function edit(Mentor $mentor)
    {
        return view('mentors.edit',compact('mentor'));
    }


    public function update(StoreMentorRequest $request, Mentor $mentor)
    {
        $mentor->update($request->validated());
        return redirect()->route('mentors.show', $mentor->id)->with('success','Mentor updated successfully');
    }

    public function destroy(Mentor $mentor)
    {
        $mentor->delete();

        return redirect()->route('mentors.index')->with('success','Mentor deleted successfully');
    }

}
