<?php

namespace App\Http\Controllers;

use App\Models\Booking;

class AdminController extends Controller
{
    public function dashboard()
    {
        $bookings = Booking::latest()->paginate(10);

        return view('admin.dashboard', compact('bookings'));
    }
}