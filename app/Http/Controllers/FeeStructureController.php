<?php

namespace App\Http\Controllers;

use App\Models\FeeStructure;
use Illuminate\Http\Request;
use Storage;

class FeeStructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $defaultsem="May 2021";
        $feestructures = FeeStructure::where('semester', $defaultsem)->get();
        //$feestructures = DB::table('fee_structures');

        return view('feestructures.index', compact('feestructures','defaultsem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feestructures.add');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feestructure= new FeeStructure();
        request()->validate([
            'file'  => 'required|mimes:pdf,doc,docx,zip|max:2048',
          ]);

          if ($request->file('file')) {
            $file=$request->file;
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->store('feestructures/'.$filename);

            $feestructure->file_name= $filename;
          }
          //store in the database
          $feestructure->file_path = $filename;
          $feestructure->student_year=$request->input('student_year');
          $feestructure->sem_start_date=$request->input('sem_start');
          $feestructure->sem_end_date=$request->input('sem_end');
          $feestructure->semester=$request->input('semester');
          $feestructure->save();

          return redirect()->back();
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeeStructure  $feeStructure
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$feestructures = FeeStructure::find($id);
        $feestructures = FeeStructure::where('id', $id)->get();
        
        if ($feestructures) {

            $feestructure=$feestructures->first();
            
        } 

        return view('feestructures.view',compact('feestructure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeeStructure  $feeStructure
     * @return \Illuminate\Http\Response
     */
    public function edit(FeeStructure $feeStructure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeeStructure  $feeStructure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeeStructure $feeStructure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeeStructure  $feeStructure
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeeStructure $feeStructure)
    {
        //
    }
    public function download($file)
    {
        
    }

}
