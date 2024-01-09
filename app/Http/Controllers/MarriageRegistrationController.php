<?php

namespace App\Http\Controllers;

use App\Models\MarriageRegistration;
use App\Models\Applicants;
use Illuminate\Http\Request;
use App\Exports\MarriageRegistrationsExport;
use Maatwebsite\Excel\Facades\Excel;



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
        // Validate the form data
        $request->validate([
            'username' => 'required',
            'Gender' => 'required',
            'mykad' => 'required',
            'RegistrationType' => 'required',
        ]);
    
        // Extract the form data
        $applicant1 = [
            'name' => $request->input('username'),
            'gender' => $request->input('Gender'),
            'mykad' => $request->input('mykad'),
            'age' => $request->input('Age', null),  // Age is optional
            'nationality' => $request->input('Nationality', null), // Nationality is optional
            'date_of_birth' => $request->input('DateOfBirth', null), // Date of birth is optional
        ];
    
        $applicant2 = [
            'name' => $request->input('Username'),
            'gender' => $request->input('Gender'),
            'mykad' => $request->input('mykad'),
            'age' => $request->input('Age', null),  // Age is optional
            'nationality' => $request->input('Nationality', null), // Nationality is optional
            'date_of_birth' => $request->input('DateOfBirth', null), // Date of birth is optional
        ];
    
        $marriageType = $request->input('RegistrationType');
    
        // Create a new marriage registration record in your database
        // (Replace this placeholder with your actual database logic)
        $marriageRegistration = MarriageRegistration::create([
            'applicant1' => $applicant1,
            'applicant2' => $applicant2,
            'marriage_type' => $marriageType,
        ]);
    
        // Redirect to a success page or display a success message
        return redirect()->route('marriageRegistrations.index')->with('success', 'Marriage registration submitted successfully!');
    }
    
    public function exportExcel()
    {
        return Excel::download(new MarriageRegistrationsExport, 'MarriageRegistrations.xlsx');
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