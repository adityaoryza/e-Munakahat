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
     * Store a newly created resource in storage..
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
            'applicantID' => 'required|string|max:50',
            'marriageID' => 'nullable|string|max:255',
            'incentive_status' => 'required|string|max:10',
            'incentive_apply_date' => 'required|date',
            'groom_job_position' => 'required|string|max:80',
            'groom_payslip' => 'required|file', // Assuming it's a file upload
            'groom_bank_statement' => 'required|file', // Assuming it's a file upload
            'groom_acc_number' => 'required|integer',
        ]);

        // Update the incentive application data
        $incentiveApplication->update($validatedData);

        return redirect()->route('incentive-application.show', ['incentiveApplication' => $incentiveApplication])->with('success', 'Incentive application updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IncentiveApplication $incentiveApplication)
    {
        // Delete the incentive application
        $incentiveApplication->delete();

        return redirect()->route('incentive-application.index')->with('success', 'Incentive application deleted successfully.');
    }
}
