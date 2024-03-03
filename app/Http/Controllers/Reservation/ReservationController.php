<?php

namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function create(Request $request)
    {
        return view('reservation.create', [
            'user' => $request->user()
        ]);
    }
}
