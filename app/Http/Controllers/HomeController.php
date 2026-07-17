<?php

namespace App\Http\Controllers;
use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.home', [
            'apprentices' => Apprentice::count(),
            'courses' => Course::count(),
            'trainingCenters' => TrainingCenter::count(),
            'computers' => Computer::count(),
        ]);
    }}
