<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lecturer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreLecturerRequest;
use Illuminate\Auth\Notifications\ResetPassword;

class LecturerController extends Controller
{
    public function index(Request $request)
    {
        $lecturers = Lecturer::latest()->paginate(20);

        return view('lecturers.index', compact('lecturers'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('lecturers.create');
    }

    public function store(StoreLecturerRequest $request)
    {
        $validated = $request->validated();
        $user_id = Auth::user()->id;
        $validated['user_id'] = $user_id;

        $saved = User::where('email', $validated['email'])->first();
        if ($saved != null) {
            $validated['user_id'] = $saved->id;
            $widow = Lecturer::create($validated);
            $saved->attachRole('lecturer');
        } else {
            $validated['password'] = Hash::make(Str::random());
            $user = User::create($validated);
            $user->attachRole('lecturer');

            $validated['user_id'] = $user->id;
            Lecturer::create($validated);

           // Mail::to($user->email)->send(new ResetPassword($user));
        }


        return redirect()->route('lecturers.index')->with('success','Lecturer created successfully.');
    }

    public function show(Request $request, Lecturer $lecturer)
    {
        return view('lecturers.show', compact('lecturer'));
    }

    public function edit(Lecturer $lecturer)
    {
        return view('lecturers.edit',compact('lecturer'));
    }


    public function update(StoreLecturerRequest $request, Lecturer $lecturer)
    {
        $lecturer->update($request->validated());
        return redirect()->route('lecturers.show', $lecturer->id)->with('success','Lecturer updated successfully');
    }

    public function destroy(Lecturer $lecturer)
    {
        $lecturer->delete();

        return redirect()->route('lecturers.index')->with('success','Lecturer deleted successfully');
    }
}
