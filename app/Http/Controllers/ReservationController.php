<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index() {
        return Reservation::all()->where('user_id', '=',  auth()->id());
    }

    public function show($id) {
        $reservation = Reservation::find($id);
        if ($reservation->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        return $reservation;
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'flight_id' => 'required',
            'price' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        $flight = Reservation::create($formFields);       
    }

    public function update(Request $request, $id) {
        $reservation = Reservation::find($id);

        if ($reservation->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $reservation->update($request->all());
    }

    public function destroy($id) {
        $reservation = Reservation::find($id);
        if ($reservation->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        return Reservation::destroy($id);
    }
}
