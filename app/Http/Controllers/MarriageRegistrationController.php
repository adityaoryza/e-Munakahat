<?php

namespace App\Http\Controllers;

use App\Models\MarriageRegistration;
use Illuminate\Http\Request;

class MarriageRegistrationController extends Controller
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
    public function create()
    {
        return view('marriageRegistrations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            // Define validation rules based on your form fields
            'husband_first_name' => 'required|string|max:255',
            'wife_first_name' => 'required|string|max:255',
            'marriage_date' => 'required|date',
            // Add more fields as needed
        ]);

        // Create a new marriage registration record
        $marriageRegistration = MarriageRegistration::create($validatedData);

        // Redirect the user to a confirmation page or dashboard
        return redirect()->route('dashboard')->with('success', 'Marriage registration submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(MarriageRegistration $marriageRegistration)
    {
        return view('marriage-registration.show', ['marriageRegistration' => $marriageRegistration]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MarriageRegistration $marriageRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MarriageRegistration $marriageRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MarriageRegistration $marriageRegistration)
    {
        //
    }
}