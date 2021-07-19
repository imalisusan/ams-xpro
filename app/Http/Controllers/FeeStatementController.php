<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\FeeStatement;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreFeeStatementRequest;

class FeeStatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fee_statement = FeeStatement::where('user_id', Auth::user()->id)->get();
        return view('feestatements.index', compact('fee_statement'))->with('fee_statement', $fee_statement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = User::all();
        return view('feestatements.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeeStatementRequest $request)
    {
        $validated = $request->validated();
        FeeStatement::create($validated);
     
        return redirect()->route('feestatement.index')->with('success','Fee Statement created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('feestatement.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function debit(Request $request)
    {
        $fee_statement = FeeStatement::where([
            ['type', "Debit"],
            ['user_id', Auth::user()->id]
        ])->get();
        return view('feestatements.index', compact('fee_statement'))->with('fee_statement', $fee_statement);
    }

    public function credit(Request $request)
    {
        $fee_statement = FeeStatement::where([
            ['type', "Credit"],
            ['user_id', Auth::user()->id]
        ])->get();
        return view('feestatements.index', compact('fee_statement'))->with('fee_statement', $fee_statement);
    }

    public function fee_statement_export()
    {
        $feestatements = FeeStatement::where('user_id', Auth::user()->id)->get();

        $feestatement = PDF::loadView('feestatements.pdf', compact('feestatements'));
        return view('feestatements.pdf', compact('feestatements'))->with('feestatements', $feestatements);
        // return $feestatement->download('feestatement.pdf');
        
    }
}
