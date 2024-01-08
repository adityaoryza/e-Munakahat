<?php

namespace App\Http\Controllers;

use App\Models\IncentiveApplication;
use Illuminate\Http\Request;

class IncentiveApplicationController extends Controller
{
    /**
     * Apply the incentive.
     
    *public function applyIncentive()
    *{
    *    return view('incentiveApplication.index');
    *}
    *
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('incentiveApplication.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('incentiveApplication.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and store the incentive application data
        $validatedData = $request->validate([
            // Define your validation rules here based on your requirements
            'applicantID' => 'required|string|max:50',
            'marriageID' => 'nullable|string|max:255',
            'incentive_status' => 'required|string|max:10',
            'incentive_apply_date' => 'required|date',
            'groom_job_position' => 'required|string|max:80',
            'groom_payslip' => 'required|file', // Assuming it's a file upload
            'groom_bank_statement' => 'required|file', // Assuming it's a file upload
            'groom_acc_number' => 'required|integer',
        ]);

        // Assuming 'IncentiveID' needs to be generated dynamically, you can customize this part
        $validatedData['IncentiveID'] = uniqid();

        // Assuming 'incentive_applications' is your model
        IncentiveApplication::create($validatedData);

        return redirect()->route('incentive-application.index')->with('success', 'Incentive application submitted successfully.');
    }

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IncentiveApplication $incentiveApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IncentiveApplication $incentiveApplication)
    {
        //
    }
}
