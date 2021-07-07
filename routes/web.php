<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use \App\Http\Controllers\ExamCardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CourseMarkController;
use App\Http\Controllers\CourseUserController;
use App\Http\Controllers\CourseModuleController;
use App\Http\Controllers\FeeStatementController;
use App\Http\Controllers\FeeStructureController;
use App\Http\Controllers\CourseLecturerController;
use App\Http\Controllers\ProgressReportController;



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
    'attendance' => AttendanceController::class,
    'coursemodules' => CourseModuleController::class,
    'coursemarks' => CourseMarkController::class,
    'feestatement' => FeeStatementController::class,
    'lecturers' => LecturerController::class,
    'courselecturers' => CourseLecturerController::class,
]);

Route::get('/register/{course}',[CourseUserController::class, 'store'])->name('courses.register');
Route::get('/teach/{course}',[CourseLecturerController::class, 'store'])->name('courses.teach');
Route::get('coursemarks/{course}/create',[CourseMarkController::class, 'create'])->name('coursemarks.create');
Route::get('attendance/{course}/create',[AttendanceController::class, 'create'])->name('attendance.create');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('mycourses', [CourseUserController::class, 'registered_courses'])->name('courses.personal');
    Route::get('mylessons', [CourseLecturerController::class, 'teach_courses'])->name('courses.teaching');
});
Route::group([ 'middleware' => ['role:admin']], function(){
    Route::get('register', function () {
        return view('auth.register');
    })->name('register');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/student/profile',[StudentController::class,'show'])->name('student.profile');
    Route::get('/student/progress',[ProgressReportController::class,'index'])->name('student.progress');
    Route::get('progressreports/download', [ProgressReportController::class, 'pdfexport'])->name('progressreport.download');
});

Route::resource('feestructures',FeeStructureController::class);
Route::get('feestructures/download/{file_path}',[FeeStructureController::class,'download'])->name('feestructures.download');
Route::post('feestructures/update/{feestructure}',[FeeStructureController::class,'update'])->name('feestructures.update');
Route::get('feestructures/delete/{feestructure}',[FeeStructureController::class,'destroy'])->name('feestructures.delete');
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('fees/feestatement', [FeeStatementController::class, 'index'])->name('fees.feestatement');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/exam-card', [ExamCardController::class, 'show'])->name("examcard");
    Route::get('/exam-card/notify', [ExamCardController::class, 'sendNotification']);
    Route::get('/progress-report', [])->name("");
});
