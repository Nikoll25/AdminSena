<?php

namespace App\Http\Controllers;
use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;
use App\Models\TrainingCenter;
use App\Models\Offer;
use App\Models\Area;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
{
    $query = Offer::with(['area', 'trainingCenter']);

    // Filtrar por área
    if ($request->area_id) {
        $query->where('area_id', $request->area_id);
    }

    // Filtrar por centro de formación
    if ($request->training_center_id) {
        $query->where('training_center_id', $request->training_center_id);
    }

    $offers = $query->get();

    $areas = Area::all();
    $trainingCentersList = TrainingCenter::all();

    return view('Home.home', [
        'apprentices' => Apprentice::count(),
        'courses' => Course::count(),
        'trainingCenters' => TrainingCenter::count(),
        'computers' => Computer::count(),

        // Ofertas
        'offers' => $offers,
        'areas' => $areas,
        'trainingCentersList' => $trainingCentersList,
    ]);
}
}
