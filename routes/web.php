<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseUserController;
use App\Http\Controllers\CourseModuleController;

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
    'coursemodules' => CourseModuleController::class,
]);

Route::get('/register/{course}',[CourseUserController::class, 'store'])->name('courses.register');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
   
Route::get('mycourses', [CourseUserController::class, 'registered_courses'])->name('courses.personal');

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

