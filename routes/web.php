<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;

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
Route::get('Area/create',[AreaController::class,'create']);
Route::post('Area/store',[AreaController::class,'store'])->name('Area.store'); 

Route::get('Computer/create',[ComputerController::class,'create']);
Route::post('Computer/store',[ComputerController::class,'store'])->name('Computer.store');

Route::get('TrainingCenter/create',[trainingcenterController::class,'create']);
Route::post('TrainingCenter/store',[TrainingCenterController::class,'store'])->name('TrainingCenter.store');