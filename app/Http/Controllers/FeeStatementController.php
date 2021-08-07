<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Degree;
use App\Mail\NewFeeInvoice;
use App\Models\FeeStatement;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

    public function create_invoice()
    {
        $degrees = Degree::all();
        return view('feestatements.invoice', compact('degrees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_invoice(StoreFeeStatementRequest $request)
    {
        $validated = $request->validated();
            $users = User::where('degree_id', $validated['degree_id'])->get();
            foreach($users as $user)
            {
                Mail::to($user->email)->send(new NewFeeInvoice($user));
            }
        
        return redirect()->route('feestatement.index')->with('success','Fee Statement created successfully.');
    }

    public function store(StoreFeeStatementRequest $request)
    {
        $validated = $request->validated();
        FeeStatement::create($validated);

        $user = User::find($validated['user_id']);
        Mail::to($user->email)->send(new NewFeeReceipt($user));
        
        return redirect()->route('feestatement.index')->with('success','Fee Statement created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(FeeStatement $fee_statement)
    {
        return view('feestatements.show', compact('fee_statement'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FeeStatement $fee_statement)
    {
        return view('feestatements.edit', compact('fee_statement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeeStatement $fee_statement)
    {
        $fee_statement->update($request->validated());
        return redirect()->route('feestatement.show', $fee_statement->id)->with('success','Fee Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeeStatement $fee_statement)
    {
        $fee_statement->delete();

        return redirect()->route('feestatements.index')->with('success','Fee Record deleted successfully');
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
        return $feestatement->download('feestatement.pdf');
        
    }
}
