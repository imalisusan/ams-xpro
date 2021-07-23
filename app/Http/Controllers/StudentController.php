<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        //Remove this line once mentor functionality is done
        $sessions = Attendance::where('user_id', $user->id)->get();
    
        return view('students.profile', compact('user', 'sessions'));
    }
}
