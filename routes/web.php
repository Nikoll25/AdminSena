<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\CourseTeacherController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//rutas para area
Route::get('Area/create',[AreaController::class,'create']);
Route::post('Area/store',[AreaController::class,'store'])->name('Area.store'); 

//rutas para computer
Route::get('Computer/create',[ComputerController::class,'create']);
Route::post('Computer/store',[ComputerController::class,'store'])->name('Computer.store');

//rutas para trainingCenter
Route::get('TrainingCenter/create',[trainingcenterController::class,'create']);
Route::post('TrainingCenter/store',[TrainingCenterController::class,'store'])->name('TrainingCenter.store');

//rutas para teacher
Route::get('teacher/create',[TeacherController::class,'create']);
Route::post('teacher/store',[TeacherController::class,'store'])->name('Teacher.store');

//rutas para course
Route::get('course/create',[CourseController::class,'create']);
Route::post('course/store',[CourseController::class,'store'])->name('Course.store');

//rutas para apprentice
Route::get('apprentice/create',[ApprenticeController::class,'create']);
Route::post('apprentice/store',[ApprenticeController::class,'store'])->name('Apprentice.store');

//rutas para courseteacher
Route::get('courseteacher/create',[CourseTeacherController::class,'create']);
Route::post('courseteacher/store',[CourseTeacherController::class,'store'])->name('CourseTeacher.store');