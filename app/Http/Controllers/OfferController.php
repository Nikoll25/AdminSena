<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Area;
use App\Models\TrainingCenter;
class OfferController extends Controller
{
     public function index(){

        $offers=Offer::all();

        return response()->json($offers);
    }


   /* public function create(){

        $areas=Area::all();
        $trainingCenters=TrainingCenter::all();
        return view('Offer.create',compact('areas','trainingCenters'));

    }

    public function store(Request $request) {
         $offer = Offer::create($request->all());
        //ADJUNTAR EL PDF
         $file=$request->file("urlFoto");

         $nombreArchivo = "foto_".time().".".$file->guessExtension();
         $request->file('urlFoto')->storeAs('public/img', $nombreArchivo );

         $offer->urlFoto = $nombreArchivo;
         $offer->save();

        return redirect()->route('offer.index');
    }

        public function show ($id){

     $offer=Offer::find($id);
       return view('Offer.show',compact('offer'));


    }

    public function edit(Offer $offer){

        $areas = Area::all();
        $trainingcenters = TrainingCenter::all();
        return view('Offer.edit', compact('offer','areas','trainingcenters'));
    }

    public function update(Request $request, Offer $offer)
    {

        $offer->update($request->all());
        return redirect()->route('offer.index');
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('offer.index');
    }*/
}
