<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Degree;
use App\Mail\NewFeeInvoice;
use App\Models\FeeStatement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreFeeStatementRequest;

class FeeInvoiceController extends Controller
{
     
    public function index(Request $request)
    {
        $fee_statement = FeeStatement::where('user_id', Auth::user()->id)->get();
        return view('feestatements.index', compact('fee_statement'))->with('fee_statement', $fee_statement);
    }

    public function create()
    {
        $degrees = Degree::all();
        return view('feeinvoices.create', compact('degrees'));
    }

    public function store(StoreFeeStatementRequest $request)
    {
        $validated = $request->validated();
        $users = User::where('degree_id', $validated['degree_id'])->get();
        foreach($users as $user)
        {
            $validated['user_id'] = $user->id;
            FeeStatement::create($validated);
            Mail::to($user->email)->send(new NewFeeInvoice($user));
        }
    
    return redirect()->route('feestatement.index')->with('success','Fee Statement created successfully.');
    }

    public function show(FeeStatement $fee_statement)
    {
        return view('feestatements.show', compact('fee_statement'));

    }

    public function edit(FeeStatement $fee_statement)
    {
        return view('feestatements.edit', compact('fee_statement'));
    }

    public function update(Request $request, FeeStatement $fee_statement)
    {
        $fee_statement->update($request->validated());
        return redirect()->route('feestatement.show', $fee_statement->id)->with('success','Fee Record updated successfully');
    }

    public function destroy(FeeStatement $fee_statement)
    {
        $fee_statement->delete();

        return redirect()->route('feestatements.index')->with('success','Fee Record deleted successfully');
    }
}
