<?php

namespace App\Http\Controllers;

use App\Models\ECG;
use Illuminate\Http\Request;

class ECGController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('ecg');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ECG $eCG)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ECG $eCG)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ECG $eCG)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ECG $eCG)
    {
        //
    }
}
