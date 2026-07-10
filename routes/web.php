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
Route::get('area/create',[AreaController::class,'create']);
Route::post('area/store',[AreaController::class,'store'])->name('Area.store');
Route::get('area/list',[AreaController::class,'index'])->name('area.index');
Route::get('area/{id}',[AreaController::class,'show'])->name('area.show');

//rutas para computer
Route::get('computer/create',[ComputerController::class,'create']);
Route::post('computer/store',[ComputerController::class,'store'])->name('Computer.store');
Route::get('computer/list',[ComputerController::class,'index'])->name('computer.index');
Route::get('computer/{id}',[ComputerController::class,'show'])->name('computer.show');

//rutas para trainingCenter
Route::get('trainingcenter/create',[trainingcenterController::class,'create']);
Route::post('trainingcenter/store',[TrainingCenterController::class,'store'])->name('TrainingCenter.store');
Route::get('trainingcenter/list',[TrainingCenterController::class,'index'])->name('trainingcenter.index');
Route::get('trainingcenter/{id}',[TrainingCenterController::class,'show'])->name('trainingcenter.show');

//rutas para teacher
Route::get('teacher/create',[TeacherController::class,'create']);
Route::post('teacher/store',[TeacherController::class,'store'])->name('Teacher.store');
Route::get('teacher/list',[TeacherController::class,'index'])->name('teacher.index');
Route::get('teacher/{id}',[TeacherController::class,'show'])->name('teacher.show');

//rutas para course
Route::get('course/create',[CourseController::class,'create']);
Route::post('course/store',[CourseController::class,'store'])->name('Course.store');
Route::get('course/list',[CourseController::class,'index'])->name('course.index');
Route::get('course/{id}',[CourseController::class,'show'])->name('course.show');

//rutas para apprentice
Route::get('apprentice/create',[ApprenticeController::class,'create']);
Route::post('apprentice/store',[ApprenticeController::class,'store'])->name('Apprentice.store');
Route::get('apprentice/list',[ApprenticeController::class,'index'])->name('apprentice.index');
Route::get('apprentice/{id}',[ApprenticeController::class,'show'])->name('apprentice.show');
