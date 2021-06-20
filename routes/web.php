<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseMarkController;
use App\Http\Controllers\CourseUserController;
use App\Http\Controllers\CourseModuleController;
use App\Http\Controllers\ProgressReportController;
use \App\Http\Controllers\ExamCardController;
use App\Http\Controllers\FeeStructureController;

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
    return view('auth.login');
});

Route::resources([
    'courses' => CourseController::class,
    'courseusers' => CourseUserController::class,
    'coursemodules' => CourseModuleController::class,
    'coursemarks' => CourseMarkController::class,
]);

Route::get('/register/{course}', [CourseUserController::class, 'store'])->name('courses.register');
Route::get('coursemarks/{course}/create', [CourseMarkController::class, 'create'])->name('coursemarks.create');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('mycourses', [CourseUserController::class, 'registered_courses'])->name('courses.personal');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/student/profile',[StudentController::class,'show'])->name('student.profile');
    Route::get('/student/progress',[ProgressReportController::class,'index'])->name('student.progress');
    Route::get('progressreports/download', [ProgressReportController::class, 'pdfexport'])->name('progressreport.download');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/exam-card', [ExamCardController::class, 'show'])->name("");
    Route::get('/progress-report', [])->name("");
});

Route::resource('feestructures',FeeStructureController::class);
Route::get('feestructures/download/{feestructure}',[FeeStructureController::class,'download'])->name('feestructures.download');
