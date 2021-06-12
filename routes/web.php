<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseUserController;
use App\Http\Controllers\AttendanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resources([
    'courses' => CourseController::class,
    'courseusers' => CourseUserController::class,
    'attendance' => AttendanceController::class,
]);

Route::get('/register/{id}', [AttendanceController::class, 'register'])->name('attendance.register');
Route::get('/register/{course}',[CourseUserController::class, 'store'])->name('courses.register');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
   
    
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

