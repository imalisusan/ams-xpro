<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use \App\Http\Controllers\ExamCardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CourseMarkController;
use App\Http\Controllers\CourseUserController;
use App\Http\Controllers\MentorUserController;
use App\Http\Controllers\CourseModuleController;
use App\Http\Controllers\FeeStatementController;
use App\Http\Controllers\FeeStructureController;
use App\Http\Controllers\CourseLecturerController;
use App\Http\Controllers\ProgressReportController;
use App\Http\Controllers\MentoringSessionController;



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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::resources([
        'courses' => CourseController::class,
        'degrees' => DegreeController::class,
        'courseusers' => CourseUserController::class,
        'attendance' => AttendanceController::class,
        'coursemodules' => CourseModuleController::class,
        'coursemarks' => CourseMarkController::class,
        'feestatement' => FeeStatementController::class,
        'lecturers' => LecturerController::class,
        'courselecturers' => CourseLecturerController::class,
        'feestructures' => FeeStructureController::class,
        'mentors' => MentorController::class,
        'mentoringsessions' => MentoringSessionController::class,
        'students' => StudentController::class,
    
    ]);
    
    Route::get('mycourses', [CourseUserController::class, 'registered_courses'])->name('courses.personal');
    Route::get('mylessons', [CourseLecturerController::class, 'teach_courses'])->name('courses.teaching');
    Route::get('mentees', [MentorUserController::class, 'mentees'])->name('mentors.mentees');

    Route::get('/register/{course}',[CourseUserController::class, 'store'])->name('courses.register');
    Route::get('/teach/{course}',[CourseLecturerController::class, 'store'])->name('courses.teach');
    Route::get('/mentor/{user}',[MentorUserController::class, 'store'])->name('students.mentor');
    Route::get('coursemarks/{course}/create',[CourseMarkController::class, 'create'])->name('coursemarks.create');
    Route::get('attendance/{course}/create',[AttendanceController::class, 'create'])->name('attendance.create');


    Route::get('/student/profile',[StudentController::class,'show'])->name('student.profile');
    Route::get('/student/progress',[ProgressReportController::class,'index'])->name('student.progress');
    Route::get('progressreports/download', [ProgressReportController::class, 'pdfexport'])->name('progressreport.download');
    Route::get('/student/progress/{year}',[ProgressReportController::class,'report_year'])->name('student.progress.year');

    Route::get('feestructures/download/{file_path}',[FeeStructureController::class,'download'])->name('feestructures.download');
    Route::post('feestructures/update/{feestructure}',[FeeStructureController::class,'update'])->name('feestructures.update');
    Route::get('feestructures/delete/{feestructure}',[FeeStructureController::class,'destroy'])->name('feestructures.delete');
    Route::get('fees/feestatement', [FeeStatementController::class, 'index'])->name('fees.feestatement');
    Route::get('fees/credit', [FeeStatementController::class, 'credit'])->name('fees.credit');
    Route::get('fees/debit', [FeeStatementController::class, 'debit'])->name('fees.debit');
    Route::get('fees/download', [FeeStatementController::class, 'fee_statement_export'])->name('fees.download'); 

    Route::get('/exam-card', [ExamCardController::class, 'show'])->name("examcards.index");
    Route::get('/exam-card/notify', [ExamCardController::class, 'sendNotification']);
    Route::get('/progress-report', [])->name("");
    Route::get('examcard/download', [ExamCardController::class, 'download'])->name('examcard.download');
});

Route::group([ 'middleware' => ['role:admin']], function(){
    Route::get('students/create',[StudentController::class, 'create'])->name('students.create'); 
    Route::put('students/{user}',[StudentController::class, 'update'])->name('students.update'); 
});