<?php

namespace App\Http\Controllers;

use App\Models\MarriageRegistration;
// use App\Models\Applicants;
use Illuminate\Http\Request;

class MarriageRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  
     public function index()
     {
         $marriageRegistrations = MarriageRegistration::all();
         return view('marriageRegistrations.index', compact('marriageRegistrations'));
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
        // Validation (replace with your specific rules)
        $request->validate([
            'RegistrationType' => 'required',
            'MarriageDate' => 'required|date',
            'PartnerFirstName' => 'required',
            'PartnerLastName' => 'required',
            'PartnerGender' => 'required',
            'PartnerPhoneNum' => 'required',
        ]);

        // Store registration data
        $registration = new MarriageRegistration();
        $registration->UserID = $request->input('UserID');
        $registration->RegistrationType = $request->input('RegistrationType');
        $registration->MarriageDate = $request->input('MarriageDate');
        $registration->PartnerFirstName = $request->input('PartnerFirstName');
        $registration->PartnerLastName = $request->input('PartnerLastName');
        $registration->PartnerGender = $request->input('PartnerGender');
        $registration->PartnerPhoneNum = $request->input('PartnerPhoneNum');
        $registration->save();

        // Redirect to success page or display a success message
        return redirect()->route('marriageRegistrations')->with('success', 'Marriage registration submitted successfully!');
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
        return view('marriageRegistrations.edit', compact('marriageRegistration'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MarriageRegistration $marriageRegistration)
    {
        $this->validate($request, [
            'RegistrationType' => 'required',
            'MarriageDate' => 'required|date',
            'RegistrationStatus' => 'required|in:pending,proceed',
        ]);

        // Update the registration's attributes
        $marriageRegistration->update([
            'RegistrationType' => $request->RegistrationType,
            'MarriageDate' => $request->MarriageDate,
            'status' => $request->RegistrationStatus,
        ]);

        return redirect()->route('marriageRegistrations.index')->with('success', 'Registration updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MarriageRegistration $marriageRegistration)
    {
        // Employ a clear and descriptive variable name
        $registrationToDelete = $marriageRegistration;
    
            // Delete the record
            $registrationToDelete->delete();
    
            // Provide informative feedback
            return redirect()->route('marriageRegistrations')->with('success', 'Marriage registration deleted successfully.');
      
    }
    
}