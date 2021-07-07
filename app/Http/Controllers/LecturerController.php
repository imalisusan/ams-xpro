<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreLecturerRequest;

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
        Lecturer::create($validated);

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
