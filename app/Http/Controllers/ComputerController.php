<?php

namespace App\Http\Controllers;
use App\Models\Computer;
use Illuminate\Http\Request;
use Cloudinary\Cloudinary;


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
                'folder' => 'computers',
                'resource_type' => 'image',
            ]
        );

        $computer = Computer::create([
            'number' => $request->number,
            'brand' => $request->brand,
            'imagen_url' => $resultado['secure_url'],
            'imagen_public_id' => $resultado['public_id'],
        ]);

        return response()->json([
            'message' => 'Computador creado correctamente',
            'data' => $computer,
        ], 201);
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

