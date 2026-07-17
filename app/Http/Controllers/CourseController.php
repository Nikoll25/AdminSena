<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Area;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class CourseController extends Controller
{
     public function index(){

        $courses=Course::all();

        return view('Course.index',compact('courses'));
    }

    public function create(){

        $areas=Area::all();
        $trainingCenters=TrainingCenter::all();
        return view('Course.create',compact('areas','trainingCenters'));

    }

    public function store(Request $request){
    $course = new Course();

    $course->number = $request->number;
    $course->day = $request->day;
    $course->area_id = $request->area_id;
    $course->training_center_id = $request->training_center_id;

    $course->save();

    return redirect()->route('course.index');
    }

    public function show ($id){

      $course=Course::find($id);
        return view('course.show',compact('course'));
    }

    public function edit(Course $course){

        $areas = Area::all();
        $trainingcenters = TrainingCenter::all();
        return view('course.edit', compact('course','areas','trainingcenters'));
    }

    public function update(Request $request, Course $course)
    {

        $course->update($request->all());

        return redirect()->route('course.index');
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index');
    }
    }
