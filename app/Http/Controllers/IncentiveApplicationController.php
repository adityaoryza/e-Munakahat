<?php

namespace App\Http\Controllers;

use App\Models\IncentiveApplication;
use Illuminate\Http\Request;

class IncentiveApplicationController extends Controller
{

    public function index()
    {
        $incentiveApplication = incentiveApplication::all();
        return view('incentiveApplication.index', compact('incentiveApplication'));
        //return view('incentiveApplication.index');
    }

    public function create()
    {
        //
        return view('incentiveApplication.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add validation rules for other fields
            'husbandName' => 'required|string|max:255',
            'husbandIC' => 'required|string|max:255',
            'workplace' => 'required|string|max:255',
            'jobPosition' => 'required|string|max:255',
            'bankCategory' => 'required|string|max:255',
            'accountNumber' => 'required|string|max:255',
            'bankStatement' => 'required|mimes:pdf|max:2048', // Example: PDF file, max 2MB
            'payslip' => 'required|mimes:pdf|max:2048', // Example: PDF file, max 2MB
        ]);
    
        // Store registration data
        $registration = new IncentiveApplication();
        $registration->husbandName = $request->input('husbandName');
        $registration->husbandIC = $request->input('husbandIC');
        $registration->workplace = $request->input('workplace');
        $registration->jobPosition = $request->input('jobPosition');
        $registration->bankCategory = $request->input('bankCategory');
        $registration->accountNumber = $request->input('accountNumber');
        $registration->bankStatement = $request->input('bankStatement');
        $registration->payslip = $request->input('payslip');
        $registration->save();


        return redirect()->route('incentiveApplication')->with('success', 'Special Incentive Application submitted successfully!');

    }


    public function views()
    {
        //
        return view('incentiveApplication.views');
    }


    public function showIncentiveApplications()
    {
        $incentiveApplications = IncentiveApplication::all(); // Assuming you have an IncentiveApplication model

        return view('views', compact('incentiveApplications'));
    }

    public function showApplications()
    {
        $incentiveApplications = IncentiveApplication::all();

        return view('incentiveApplication.views', compact('incentiveApplications'));
    }


    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
        
    
        
    /**
     * Display the specified resource.
     */
    public function show(IncentiveApplication $incentiveApplication)
    {
        return view('incentive-application.show', ['$incentiveApplication' => $incentiveApplication]);
        //return view('marriage-registration.show', ['marriageRegistration' => $marriageRegistration]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IncentiveApplication $incentiveApplication)
    {
        return view('incentive-application.edit', ['incentiveApplication' => $incentiveApplication]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IncentiveApplication $incentiveApplication)
    {
        // Validate and update the incentive application data
        $validatedData = $request->validate([
            // Define your validation rules here based on your requirements
            'husbandName' => 'required|string|max:255',
            'husbandIC' => 'required|string|max:255',
            'workplace' => 'required|string|max:255',
            'jobPosition' => 'required|string|max:255',
            'bankCategory' => 'required|string|max:255',
            'accountNumber' => 'required|string|max:255',
            'bankStatement' => 'required|mimes:pdf|max:2048', // Example: PDF file, max 2MB
            'payslip' => 'required|mimes:pdf|max:2048', // Example: PDF file, max 2MB
        ]);

        // Update the incentive application data
        $incentiveApplication->update($validatedData);
        //return redirect()->route('incentiveApplication.index')->with('success', 'Incentive application deleted successfully.');
        return redirect()->route('incentiveApplication')->with('success', 'Special Incentive Application submitted successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IncentiveApplication $incentiveApplication)
    {
        // Delete the incentive application
        $incentiveApplication->delete();
        //return redirect()->route('incentiveApplication.index')->with('success', 'Incentive application deleted successfully.');
        return redirect()->route('incentive-application.index')->with('success', 'Incentive application deleted successfully.');
    }
}
