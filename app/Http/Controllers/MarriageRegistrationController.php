<?php

namespace App\Http\Controllers;

use App\Models\MarriageRegistration;
use App\Models\Applicants;
use Illuminate\Http\Request;

class MarriageRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  
     public function index()
     {
         $applicants = Applicants::all();  // Fetch all applicants
     
         return view('marriageRegistrations.index', compact('applicants'));  // Pass to view
     }
     
    
    public function create()
    {
        return view('marriageRegistrations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  
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