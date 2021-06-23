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
        //$feestructures = FeeStructure::where('semester', $defaultsem)->get();
        $firstyear = FeeStructure::where('semester', $defaultsem)->where('student_year',1)->latest()->first();
        $secondyear = FeeStructure::where('semester', $defaultsem)->where('student_year',2)->latest()->first();
        $thirdyear = FeeStructure::where('semester', $defaultsem)->where('student_year',3)->latest()->first();
        $fourthyear = FeeStructure::where('semester', $defaultsem)->where('student_year',4)->latest()->first();
      

        return view('feestructures.index', compact('defaultsem','firstyear','secondyear','thirdyear','fourthyear'));
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
    
          if ($request->file('file')) {
            $feestructure= new feestructure();
            $file=$request->file('file');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/feestructures/', $filename);

            $feestructure->file_name= $filename;
          }
          //store in the database
          $feestructure->file_path = $filename;
          $feestructure->student_year=$request->input('student_year');
          $feestructure->sem_start_date=$request->input('sem_start');
          $feestructure->sem_end_date=$request->input('sem_end');
          $feestructure->semester=$request->input('semester');
          $feestructure->save();

          return redirect()->back()->with('message','You have successfully uploaded the fee structure!');
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeeStructure  $feeStructure
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feestructure = FeeStructure::find($id);

        return view('feestructures.view',compact('feestructure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeeStructure  $feeStructure
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feestructure = FeeStructure::find($id);

        return view('feestructures.edit',compact('feestructure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeeStructure  $feeStructure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* request()->validate([
            'file'  => 'required|mimes:pdf,doc,docx,zip|max:2048',
          ]);  */
          $feestructure = FeeStructure::find($id);
          $prev_filename=$feestructure->file_name;
    
          if ($request->file('file')) {
            $feestructure= new feestructure();
            $file=$request->file('file');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/feestructures/', $filename);

            $feestructure->file_name= $filename;
          }
          //store in the database
          $feestructure->file_path = $filename;
          $feestructure->student_year=$request->input('student_year');
          $feestructure->sem_start_date=$request->input('sem_start');
          $feestructure->sem_end_date=$request->input('sem_end');
          $feestructure->semester=$request->input('semester');
          $feestructure->save();

          //delete the previous file from storage
         // $request->file->unlink('storage/feestructures/', $prev_filename);
          Storage::delete($prev_filename);
          $defaultsem="May 2021";
          //$feestructures = FeeStructure::where('semester', $defaultsem)->get();
          $firstyear = FeeStructure::where('semester', $defaultsem)->where('student_year',1)->latest()->first();
          $secondyear = FeeStructure::where('semester', $defaultsem)->where('student_year',2)->latest()->first();
          $thirdyear = FeeStructure::where('semester', $defaultsem)->where('student_year',3)->latest()->first();
          $fourthyear = FeeStructure::where('semester', $defaultsem)->where('student_year',4)->latest()->first();
        
  
          return redirect()->route('feestructures.index', [$defaultsem,$firstyear,$secondyear,$thirdyear,$fourthyear])->with('message','You have successfully updated the fee structure!');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeeStructure  $feeStructure
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feestructure = FeeStructure::find($id);
        $prev_filename=$feestructure->file_name;
        Storage::delete($prev_filename);

        FeeStructure::where('id',$id)->delete();

        $defaultsem="May 2021";
          //$feestructures = FeeStructure::where('semester', $defaultsem)->get();
          $firstyear = FeeStructure::where('semester', $defaultsem)->where('student_year',1)->latest()->first();
          $secondyear = FeeStructure::where('semester', $defaultsem)->where('student_year',2)->latest()->first();
          $thirdyear = FeeStructure::where('semester', $defaultsem)->where('student_year',3)->latest()->first();
          $fourthyear = FeeStructure::where('semester', $defaultsem)->where('student_year',4)->latest()->first();
        
  
          return redirect()->route('feestructures.index', [$defaultsem,$firstyear,$secondyear,$thirdyear,$fourthyear])->with('message','You have successfully deleted the fee structure!');

    }
    public function download($file_path)
    {
        return response()->download('storage/feestructures/'.$file_path);
    }

}
