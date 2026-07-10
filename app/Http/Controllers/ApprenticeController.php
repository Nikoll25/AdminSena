<?php

namespace App\Http\Controllers;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index(){

        $apprentices=Apprentice::all();

        return view('Apprentice.index',compact('apprentices'));
    }

    public function create(){

        $courses=Course::all();
        $computers=Computer::all();
        return view('Apprentice.create',compact('courses','computers'));

    }

    public function store(Request $request){
    $apprentice = new Apprentice();

    $apprentice->name = $request->name;
    $apprentice->email = $request->email;
    $apprentice->cell_number = $request->cell_number;
    $apprentice->course_id = $request->course_id;
    $apprentice->computer_id = $request->computer_id;

    $apprentice->save();

    return redirect()->route('apprentice.index');
    }

    public function show ($id){

     $apprentice=Apprentice::find($id);
       return view('Apprentice.show',compact('apprentice'));


    }
    }
