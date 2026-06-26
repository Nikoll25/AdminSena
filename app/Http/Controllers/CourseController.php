<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Area;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create(){

        $areas=Area::all();
        $trainingCenters=TrainingCenter::all();
        return view('Course.create',compact('areas','trainingCenters'));

    }

    public function store(Request $request){

     Course::create($request->all());
    }
    }
