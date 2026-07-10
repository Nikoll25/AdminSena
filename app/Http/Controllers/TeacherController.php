<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\TrainingCenter;

class TeacherController extends Controller
{
    public function index(){

        $teachers=Teacher::all();

        return view('Teacher.index',compact('teachers'));
    }


    public function create(){

        $areas=Area::all();
        $trainingCenters=TrainingCenter::all();
        return view('Teacher.create',compact('areas','trainingCenters'));

    }

    public function store(Request $request){
    $teacher = new Teacher();

    $teacher->name = $request->name;
    $teacher->email = $request->email;
    $teacher->area_id = $request->area_id;
    $teacher->training_center_id = $request->training_center_id;

    $teacher->save();

    return redirect()->route('teacher.index');
}

        public function show ($id){

     $teacher=Teacher::find($id);
       return view('teacher.show',compact('teacher'));


    }
}
