<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('appointment');
    }

    /**
     * Show the form for creating a new resource.
     */
    


 public function create()
    {
        return view('appointment');
    }

    // public function store(Request $request)
    // {
    //     // Validation
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'age' => 'required|numeric|min:1|max:120',
    //         'phone' => 'required|digits_between:10,15',
    //     ]);

    //     // Save to DB
    //     Appointment::create([
    //         'name' => $request->name,
    //         'age' => $request->age,
    //         'phone' => $request->phone,
    //     ]);

    //     // WhatsApp message
    //     $whatsappNumber = "919055449055"; 

    //     $message = "Hello Neuberg Diagnostics,%0A";
    //     $message .= "I would like to request a callback for booking a diagnostic test.%0A%0A";
    //     $message .= "Name: " . $request->name . "%0A";
    //     $message .= "Age: " . $request->age . "%0A";
    //     $message .= "Phone: " . $request->phone . "%0A%0A";
    //     $message .= "Please contact me at the earliest. Thank you.";

    //     $url = "https://wa.me/" . $whatsappNumber . "?text=" . $message;

    //     return redirect()->away($url);
    // }


    public function store(Request $request)
{
    // Validation
    $request->validate([
        'name' => 'required|string|max:255',
        'age' => 'required|numeric|min:1|max:120',
        'phone' => 'required|digits_between:10,15',
    ]);

    // Save to DB
    Appointment::create([
        'name' => $request->name,
        'age' => $request->age,
        'phone' => $request->phone,
    ]);

    // Admin WhatsApp Number
    $whatsappNumber = "919055449055";

    // Message
    $message = "Hello Neuberg Diagnostics,%0A";
    $message .= "I would like to request a callback for booking a diagnostic test.%0A%0A";
    $message .= "Name: " . $request->name . "%0A";
    $message .= "Age: " . $request->age . "%0A";
    $message .= "Phone: " . $request->phone . "%0A%0A";
    $message .= "Please contact me at the earliest. Thank you.";

    $url = "https://wa.me/" . $whatsappNumber . "?text=" . $message;

    // Redirect with success message
    return redirect()
        ->back()
        ->with('success', 'Appointment request submitted successfully!')
        ->with('whatsapp_url', $url);
}



    /**
     * Store a newly created resource in storage.
     */
 

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
