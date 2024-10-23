<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $siswas = siswa::all();
        return view('guru.index',compact('siswas'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
    }

    // Update the specified Siswa in storage
    public function update(Request $request, string $id):RedirectResponse
    {
        //Validate the incoming request data

        //find the product by ID
        $siswa = siswa::findOrFail($id);


        //update product details
        $siswa->status = 'selesai';

        //save the update product
        $siswa->save();

        //redirect back to the product index with a succes message
        return redirect()->route('guru.index')->with('success', 'berhasil diubah');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
