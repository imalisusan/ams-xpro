<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamCardController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('examCard.index', compact('user'));
    }
}
