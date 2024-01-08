<?php

namespace App\Http\Controllers;

use App\Models\MarriagePreparationCourse;
use Illuminate\Http\Request;

class MarriagePreparationCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = MarriagePreparationCourse::all();

        return view('marriage-preparation-course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marriage-preparation-course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Applicant Name' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|string',
            'payment_proof' => 'required|mimes:pdf|max:2048', // PDF file, max size 2MB
            //  other validation rules 
        ]);
        $data = $request->all();

        // Handling file upload (payment proof)
        if ($request->hasFile('payment_proof')) {
            $file = $request->file('payment_proof');
            $fileName = time() . '_' . $file->getApplicantOriginalName();
            $file->storeAs('payment_proofs', $fileName, 'public');
            $data['payment_proof'] = $fileName;
        }

        MarriagePreparationCourse::create($request->all());

        return redirect()->route('marriage-preparation-courses.index')->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(MarriagePreparationCourse $marriagePreparationCourse)
    {
        return view('marriage-preparation-course.show', compact('marriagePreparationCourse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MarriagePreparationCourse $marriagePreparationCourse)
    {
        return view('marriage-preparation-course.edit', compact('marriagePreparationCourse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MarriagePreparationCourse $marriagePreparationCourse)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'duration' => 'required|integer',
            // Add other rule
        ]);

        $marriagePreparationCourse->update($request->all());

        return redirect()->route('marriage-preparation-courses.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MarriagePreparationCourse $marriagePreparationCourse)
    {
        $marriagePreparationCourse->delete();

        return redirect()->route('marriage-preparation-courses.index')->with('success', 'Course deleted successfully.');
    }
}
