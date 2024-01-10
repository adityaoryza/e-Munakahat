<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultation = Consultation::all();
        return view('consultation.index', compact('consultations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Consultation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'ConsultationID' => 'required|unique:consultations',
            'UserID' => 'required',
            'consultation_place' => 'required',
            'counselor_gender' => 'required|in:male,female',
            'consultation_purpose' => 'required',
            'consultation_description' => 'required',
            'consultation_date' => 'required|date',
            'consultation_time' => 'required|date_format:H;i',
        ]);

    Consultation::create($data);

    return redirect() ->route('consultation.index')->with('success', 'Consultation created successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(Consultation $consultation)
    {
            return view('consultation.show', ['consultation' => $consultation]);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consultation $consultation)
    {
        $consultation = Consultation::findOrFail($id);

        $data = $request->validate([
            'ConsultationID' => 'required|unique:consultations',
            'UserID' => 'required',
            'consultation_place' => 'required',
            'counselor_gender' => 'required|in:male,female',
            'consultation_purpose' => 'required',
            'consultation_description' => 'required',
            'consultation_date' => 'required|date',
            'consultation_time' => 'required|date_format:H;i', ]);

            $consultation->update($data);
            return redirect()->route('consultation.index')->with('success', 'Consultation updated successfully');
    }

    /**
     * Remove the specified resource from storage.                                                                                                                                                                                                                                                                                                                                                                                                                                                            nnnnnnnnnnnnnnnnnnnnn
     */
    public function destroy(Consultation $consultation)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->delete();

        return redirect()->route('consultations.index')->with('success', 'Consultation deleted successfully');
    }
}
