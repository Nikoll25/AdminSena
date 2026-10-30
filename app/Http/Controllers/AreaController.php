<?php

namespace App\Http\Controllers;
use App\Models\Area;
use Illuminate\Http\Request;
use Cloudinary\Cloudinary;

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
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);
        $file = $request->file('imagen');

        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('services.cloudinary.cloud_name'),
                'api_key' => config('services.cloudinary.api_key'),
                'api_secret' => config('services.cloudinary.api_secret'),
            ],
            'url' => ['secure' => true],
        ]);

        $resultado = $cloudinary->uploadApi()->upload(
            $file->getRealPath(),
            [
                'folder' => 'areas',
                'resource_type' => 'image',
            ]
        );

        $area = Area::create([
            'name' => $request->name,
            'imagen_url' => $resultado['secure_url'],
            'imagen_public_id' => $resultado['public_id'],
        ]);

        return response()->json([
            'message' => 'area creada correctamente',
            'data' => $area,
        ], 201);
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
