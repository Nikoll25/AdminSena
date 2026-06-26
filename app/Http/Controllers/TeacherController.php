<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\TrainingCenter;

class TeacherController extends Controller
{
    public function create(){

        $areas=Area::all();
        $trainingCenters=TrainingCenter::all();
        return view('Teacher.create',compact('areas','trainingCenters'));

    }

    public function store(Request $request){

     Teacher::create($request->all());
    }
}
