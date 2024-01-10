<?php

namespace App\Http\Controllers;

use App\Models\ConsultationPlace;
use Illuminate\Http\Request;

class ConsultationPlaceController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'CounselorID' => 'required|unique:conselors',
            'ConsultationID' => 'required',
            'counselor_gender' => 'required|in:male,female',
            'counselor_name' => 'required|max:100',
            'counselor_no' => 'required|numeric',
            'counselor_email' => 'required|email|max:20',
        ]);
     
    Counselor::create($data);

    return redirect()->route('conselors.index')->with('Success', 'Counselor is signed');
}

    /**
     * Display the specified resource.
     */
    public function show(ConsultationPlace $consultationPlace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ConsultationPlace $consultationPlace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ConsultationPlace $consultationPlace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ConsultationPlace $consultationPlace)
    {
        //
    }
}
