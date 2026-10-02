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

        return response()->json($courses);
    }
        public function store(Request $request)
    {
        $request->validate([
        'number' => 'required|max:255',
        'day' => 'required|max:255',
        'area_id' => 'required|exists:areas,id',
        'training_center_id' => 'required|exists:training_centers,id',
    ]);
        $course = Course::create($request->all());


        return response()->json($course);
    }

    public function show($id) //si se pasa $id se utiliza la comentada
    {
        $course = Course::findOrFail($id);
        return response()->json($course);
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'number' => 'required|max:255',
            'day' => 'required|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $course->update($request->all());

        return response()->json ($course);
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return response()->json($course);
    }

    //public function create(){

       // $areas=Area::all();
       // $trainingCenters=TrainingCenter::all();
       // return view('Course.create',compact('areas','trainingCenters'));

    //}

    //public function store(Request $request){
   // $course = new Course();

   // $course->number = $request->number;
   // $course->day = $request->day;
   // $course->area_id = $request->area_id;
   // $course->training_center_id = $request->training_center_id;

   // $course->save();

  //  return redirect()->route('course.index');
  //  }

  //  public function show ($id){

    //  $course=Course::find($id);
   //     return view('course.show',compact('course'));
    //}

   // public function edit(Course $course){

    //    $areas = Area::all();
      //  $trainingcenters = TrainingCenter::all();
      //  return view('course.edit', compact('course','areas','trainingcenters'));
    //}

  //  public function update(Request $request, Course $course)
  //  {
//
      //  $course->update($request->all());

     //   return redirect()->route('course.index');
    //}

    //Destroy se encuentra el registro para luego eliminarlo..
  //  public function destroy(Course $course)
  //  {
     //   $course->delete();
      //  return redirect()->route('course.index');
   // }
    }
