<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('studentprofile', compact('user'));
    }
}
