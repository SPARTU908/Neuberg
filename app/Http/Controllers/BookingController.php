<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserBookingMail;
use App\Mail\AdminBookingMail;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($test)
    {
        return view('book-test', compact('test'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'test_name'=>'required'
        ]);

        $booking = Booking::create([
            'name'  => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'test_name' => $request->test_name,
        ]);

        try {

            Mail::to($request->email)
                ->send(new UserBookingMail($booking));

            Mail::to(env('ADMIN_EMAIL'))
                ->send(new AdminBookingMail($booking));
        } catch (\Exception $e) {
            Log::error('Mail Error: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Booking submitted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
