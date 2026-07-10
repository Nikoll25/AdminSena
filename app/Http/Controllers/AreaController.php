<?php

namespace App\Http\Controllers;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index(){

        $areas=Area::all();

        return view('Area.index',compact('areas'));
    }

    public function create(){
        return view('Area.create');
    }

    public function store(Request $request)
    {
    $area = new Area();

    $area->name = $request->name;

    $area->save();

    return redirect()->route('area.index');
    }

    public function show ($id){

     $area=Area::find($id);
       return view('Area.show',compact('area'));


    }
}
