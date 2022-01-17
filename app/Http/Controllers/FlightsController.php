<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightsController extends Controller
{
    public function flights(){
        
        $flights = Flight::all();

        return view('flight', compact('flights'));
    }
}