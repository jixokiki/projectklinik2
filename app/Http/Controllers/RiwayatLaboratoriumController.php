<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatLaboratorium;
use Illuminate\Support\Facades\Session;

class RiwayatLaboratoriumController extends Controller
{
    public function store(Request $request)
{
    // Validate form inputs
    $validatedData = $request->validate([
        'id_riwayat', // Add this if you're manually setting the value
        'volume' => 'nullable|string',
        'jumlah' => 'nullable|string',
        'waktu' => 'nullable|string',
        'prioritas' => 'nullable|string',
        'diagnosis' => 'nullable|string',
        'permintaan' => 'nullable|string',
        'metode' => 'nullable|string',
        'sumber' => 'nullable|string',
        'lokasi' => 'nullable|string',
        'cara' => 'nullable|string',
        'kondisi' => 'nullable|string',
        'tanggal_pengambilan' => 'nullable|date',
        'tanggal_fiksasi' => 'nullable|date',
        'cairan' => 'nullable|string',
        'interpretasi' => 'nullable|string',
    ]);

    // Assign null to id_riwayat and id_laboratorium if not available
    // $validatedData['id_riwayat'] = Session::get('id_registrasi', null);  // Default to null if not found in session
    // $validatedData['id_laboratorium'] = null;  // Default to null, or you can dynamically assign if needed
    
    // Save the data to the database
    RiwayatLaboratorium::create($validatedData);

    // Redirect back with success message
    return redirect()->route('riwayat.form')->with('success', 'Data berhasil disimpan.');
}

}