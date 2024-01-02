<?php

namespace App\Http\Controllers;

use App\Models\IncentiveApplication;
use Illuminate\Http\Request;

class IncentiveApplicationController extends Controller
{
    /**
     * Apply the incentive.
     */
    public function applyIncentive()
    {
        return view('incentiveApplication.index');
    }
    /**
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
        return view('incentiveApplication.applyIncentive');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(IncentiveApplication $incentiveApplication)
    {
        //
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
