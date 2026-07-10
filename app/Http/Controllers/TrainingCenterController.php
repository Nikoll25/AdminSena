<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter;


class TrainingCenterController extends Controller
{
    public function index(){

        $trainingcenters=TrainingCenter::all();

        return view('TrainingCenter.index',compact('trainingcenters'));
    }

    public function create(){
     return view('TrainingCenter.create');
    }
    
    public function store(Request $request){
    $trainingcenter = new TrainingCenter();

    $trainingcenter->name = $request->name;
    $trainingcenter->location = $request->location;

    $trainingcenter->save();

    return redirect()->route('trainingcenter.index');
    }
    public function show ($id){

     $trainingcenter=TrainingCenter::find($id);
       return view('TrainingCenter.show',compact('trainingcenter'));


    }
}
