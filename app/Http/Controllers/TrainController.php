<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $filtered_trains = Train::where('departure_date', '=', '2024-02-15')->get();

        return view('home', compact('filtered_trains'));
    }
}
