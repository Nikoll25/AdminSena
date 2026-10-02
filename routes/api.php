<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\OfferController;



Route::get('/user', function(Request $request){
    return $request->user();
})->middleware('auth:sanctum');

Route::get('computer',[ComputerController::class,'index'])->name('api.v1.computer.index');
Route::post('computer',[ComputerController::class,'store'])->name('api.v1.computer.store');
Route::get('computer/{computer}',[ComputerController::class,'show'])->name('api.v1.computer.show');
Route::put('computer/{computer}',[ComputerController::class,'update'])->name('api.v1.computer.update');
Route::delete('computer/{computer}',[ComputerController::class,'destroy'])->name('api.v1.computer.destroy');

Route::get('area',[AreaController::class,'index'])->name('api.v1.area.index');
Route::post('area',[AreaController::class,'store'])->name('api.v1.area.store');
Route::get('area/{area}',[AreaController::class,'show'])->name('api.v1.area.show');
Route::put('area/{area}',[AreaController::class,'update'])->name('api.v1.area.update');
Route::delete('area/{area}',[AreaController::class,'destroy'])->name('api.v1.area.destroy');

Route::get('trainingcenter',[TrainingCenterController::class,'index'])->name('api.v1.trainingcenter.index');
Route::post('trainingcenter',[TrainingCenterController::class,'store'])->name('api.v1.trainingcenter.store');
Route::get('trainingcenter/{trainingcenter}',[TrainingCenterController::class,'show'])->name('api.v1.trainingcenter.show');
Route::put('trainingcenter/{trainingcenter}',[TrainingCenterController::class,'update'])->name('api.v1.trainingcenter.update');
Route::delete('trainingcenter/{trainingcenter}',[TrainingCenterController::class,'destroy'])->name('api.v1.trainingcenter.destroy');

Route::get('teacher',[TeacherController::class,'index'])->name('api.v1.teacher.index');
Route::post('teacher',[TeacherController::class,'store'])->name('api.v1.teacher.store');
Route::get('teacher/{teacher}',[TeacherController::class,'show'])->name('api.v1.teacher.show');
Route::put('teacher/{teacher}',[TeacherController::class,'update'])->name('api.v1.teacher.update');
Route::delete('teacher/{teacher}',[TeacherController::class,'destroy'])->name('api.v1.teacher.destroy');

Route::get('course',[CourseController::class,'index'])->name('api.v1.course.index');
Route::post('course',[CourseController::class,'store'])->name('api.v1.course.store');
Route::get('course/{course}',[CourseController::class,'show'])->name('api.v1.course.show');
Route::put('course/{course}',[CourseController::class,'update'])->name('api.v1.course.update');
Route::delete('course/{course}',[CourseController::class,'destroy'])->name('api.v1.course.destroy');

Route::get('apprentice',[ApprenticeController::class,'index'])->name('api.v1.apprentice.index');
Route::post('apprentice',[ApprenticeController::class,'store'])->name('api.v1.apprentice.store');
Route::get('apprentice/{apprentice}',[ApprenticeController::class,'show'])->name('api.v1.apprentice.show');
Route::put('apprentice/{apprentice}',[ApprenticeController::class,'update'])->name('api.v1.apprentice.update');
Route::delete('apprentice/{apprentice}',[ApprenticeController::class,'destroy'])->name('api.v1.apprentice.destroy');

Route::get('offer',[OfferController::class,'index'])->name('api.v1.offer.index');
Route::post('offer',[OfferController::class,'store'])->name('api.v1.offer.store');
Route::get('offer/{offer}',[OfferController::class,'show'])->name('api.v1.offer.show');
Route::put('offer/{offer}',[OfferController::class,'update'])->name('api.v1.offer.update');
Route::delete('offer/{offer}',[OfferController::class,'destroy'])->name('api.v1.offer.destroy');
