<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function index(){

        $computers=Computer::all();

        return view('Computer.index',compact('computers'));
    }

    public function create(){
        return view('Computer.create');
    }
    public function store(Request $request)
    {
    $computer = new Computer();

    $computer->number = $request->number;
    $computer->brand = $request->brand;

    $computer->save();

    return redirect()->route('computer.index');    }

    public function show ($id){

     $computer=Computer::find($id);
       return view('Computer.show',compact('computer'));


    }
}
