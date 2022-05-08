<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index() {
        return Flight::all();
    }

    public function show($id) {
        return Flight::find($id);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'airline' => 'required',
            'from' => 'required',
            'to' => 'required'
        ]);

        $flight = Flight::create($formFields); 
    }
}
