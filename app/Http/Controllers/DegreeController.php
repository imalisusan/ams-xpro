<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDegreeRequest;

class DegreeController extends Controller
{
    public function index(Request $request)
    {
        $degrees = Degree::latest()->paginate(20);

        return view('degrees.index', compact('degrees'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('degrees.create');
    }

    public function store(StoreDegreeRequest $request)
    {
        $validated = $request->validated();
        Degree::create($validated);

        return redirect()->route('degrees.index')->with('success','Degree created successfully.');
    }

    public function show(Request $request, Degree $degree)
    {
    
        return view('degrees.show', compact('degree'));
    } 
     
    public function edit(Degree $degree)
    {
        return view('degrees.edit',compact('degree'));
    }


    public function update(StoreDegreeRequest $request, Degree $degree)
    {
        $degree->update($request->validated());
        return redirect()->route('degrees.show', $degree->id)->with('success','Degree updated successfully');
    }

    public function destroy(Degree $degree)
    {
        $degree->delete();

        return redirect()->route('degrees.index')->with('success','Degree deleted successfully');
    }
}
