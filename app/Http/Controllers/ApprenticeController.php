<?php

namespace App\Http\Controllers;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function create(){

        $courses=Course::all();
        $computers=Computer::all();
        return view('Apprentice.create',compact('courses','computers'));

    }

    public function store(Request $request){

     Apprentice::create($request->all());
    }}
