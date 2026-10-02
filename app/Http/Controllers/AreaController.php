<?php

namespace App\Http\Controllers;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index(){
        $areas = Area::all();
        return response()->json($areas);
    }

     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $area = Area::create($request->all());


        return response()->json($area);
    }

    public function show($id) //si se pasa $id se utiliza la comentada
    {
        $area = Area::findOrFail($id);
        return response()->json($area);
    }

    public function update(Request $request, Area $area)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $area->update($request->all());

        return response()->json ($area);
    }

    public function destroy(Area $area)
    {
        $area->delete();
        return response()->json($area);
    }
}
//public function index()
//{
   //  $areas=Area::all();

    //    return view('area.index',compact('areas'));
///}

    //public function create(){
    //    return view('Area.create');
    //}

   // public function store(Request $request)
    //{
   // $area = new Area();

    //$area->name = $request->name;

    //$area->save();

    //return redirect()->route('area.index');
    //}

   //public function show ($id){

     //$area=Area::find($id);
     // return view('Area.show',compact('area'));


    //}

   // public function edit(Area $area){

   //     return view('Area.edit', compact('area'));
    //}

   // public function update(Request $request, Area $area)
   //{
//   $area->update($request->all());

        //return redirect()->route('area.index');
    //}

    //Destroy se encuentra el registro para luego eliminarlo..
    //public function destroy(Area $area)
    //{
     //   $area->delete();
      //  return redirect()->route('area.index');
   // }

//}
