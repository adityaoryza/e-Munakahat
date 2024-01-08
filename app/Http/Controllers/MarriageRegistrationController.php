<?php

namespace App\Http\Controllers;

use App\Models\MarriageRegistration;
use Illuminate\Http\Request;

class MarriageRegistrationController extends Controller
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
        return view('marriageRegistrations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:50',
            'pengarang' => 'required|max:30',
            'penerbit' => 'required|max:50',
            'tahun_terbit' => 'required',
            'isbn' => 'required|max:20',
            'jumlah_buku' => 'required|max:5',
            'lokasi' => 'required|max:50',
            'tanggal_input' => 'required'
        ]);

    Books::create($request->all());
    return redirect('/books')->with('pesan', 'Data buku berhasil ditambahkan');
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