<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data siswa dari database
    $siswas = siswa::all();


    // Kirim data siswa ke view index.blade.php
    return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create'); // Adjust the view path as needed
    }

    // Store a newly created Siswa in storage
    public function store(Request $request)
    {
        $request->validate([
            'pelapor' => 'required|string|max:255',
            'terlapor' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'laporan' => 'required|string',
            'bukti' => 'nullable|file|mimes:jpg,png,pdf|max:2048', // Adjust file validation as needed
        ]);

        $bukti = $request->file('bukti');
        $bukti->storeAs('siswas',$bukti->hashName(),'public');

        // hashName, metode yang digunakan dalam konteks upload file untuk menghasilkan nama file yang unik dan aman,
        // fitur ini biasanya digunakan dalam sistem upload file untuk menghindari konflik nama file dan untuk memastikan bahwa file yang di-upload
        // tidak akan menimpa file lainnya.

        Siswa::create([
            'pelapor' => $request->pelapor,
            'terlapor' => $request->terlapor,
            'kelas' => $request->kelas,
            'laporan' => $request->laporan,
            'bukti' => $bukti->hashName(),
         
        ]);


        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    // Display the specified Siswa
    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa')); // Adjust the view path as needed
    }

    // Show the form for editing the specified Siswa
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa')); // Adjust the view path as needed
    }
    public function update(Request $id)
    {
      
    }
    // Update the specified Siswa in storage

}