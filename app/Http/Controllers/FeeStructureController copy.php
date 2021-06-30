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
        
        request()->validate([
            'file'  => 'required|mimes:pdf,doc,docx,zip|max:2048',
          ]);
          echo $filename =$request->file('file')->getClientOriginalName();
           if ($files = $request->file('file')) {
                
               //store file into feestructure folder
               $file = $request->file->store('public/feestructures');
               $filepath=Storage::url($file);
               echo $filepath;
    
               //store your file into database
               $feestructure = new feestructure();
               $feestructure->file_path = $filepath;
               $feestructure->student_year=$request->input('student_year');
               $feestructure->sem_start_date=$request->input('sem_start');
               $feestructure->sem_end_date=$request->input('sem_end');
               $feestructure->semester=$request->input('semester');
               $feestructure->save();
                 
                return Response()->json([
                   "success" => true,
                   "file" => $file
               ]); 
               //return Storage::download($file,$filename);
     
           }
     
           return Response()->json([
                   "success" => false,
                   "file" => ''
             ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeeStructure  $feeStructure
     * @return \Illuminate\Http\Response
     */
    public function show(FeeStructure $feeStructure)
    {
        //
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
    public function download(FeeStructure $feeStructure)
    {
        
        //receive the fee structure whole
        //get the filepath from db
        //use the file path to locate it in storage
        //$filepath=Storage::url($feeStructure);
        //return Storage::download($feeStructure,$filename);
        
    }
}
