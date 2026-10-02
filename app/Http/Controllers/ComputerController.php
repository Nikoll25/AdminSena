<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    //public function index(){

       // $computers=Computer::all();

   //     return view('Computer.index',compact('computers'));
    //}
    public function index(){
        $computers = Computer::all();
        return response()->json($computers);
    }

     public function store(Request $request)
    {
        $request->validate([
            'number' => 'required|max:255',
            'brand' => 'required|max:255',
        ]);
        $computer = Computer::create($request->all());


        return response()->json($computer);
    }

    public function show($id) //si se pasa $id se utiliza la comentada
    {
        $computer = Computer::findOrFail($id);
        return response()->json($computer);
    }

    public function update(Request $request, Computer $computer)
    {
        $request->validate([
            'number' => 'required|max:255',
            'brand' => 'required|max:255',
        ]);

        $computer->update($request->all());

        return response()->json ($computer);
    }

    public function destroy(Computer $computer)
    {
        $computer->delete();
        return response()->json($computer);
    }
}
    //public function create(){
    //    return view('Computer.create');
    //}
    //public function store(Request $request)
    //{
    //$computer = new Computer();

    //$computer->number = $request->number;
    //$computer->brand = $request->brand;

    //$computer->save();

    //return redirect()->route('computer.index');    }

    //public function show ($id){

     //$computer=Computer::find($id);
     //  return view('Computer.show',compact('computer'));
    //}

    //    public function edit(Computer $computer){

     //   return view('computer.edit', compact('computer'));
   // }

   // public function update(Request $request, Computer $computer)
   // {

   //     $computer->update($request->all());

  //      return redirect()->route('computer.index');
  //  }

    //Destroy se encuentra el registro para luego eliminarlo..
//    public function destroy(Computer $computer)
   // {
       // $computer->delete();
       // return redirect()->route('computer.index');
   // }

