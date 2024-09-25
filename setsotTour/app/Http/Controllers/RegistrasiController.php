<?php

namespace App\Http\Controllers;

use App\Models\registrasi;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrasi = registrasi::all();
        return view('registrasi.index')->with('registrasi', $registrasi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'nama'=> 'required|max:50',
            'tour'=> 'required|max:50',
            'waktu'=> 'required|max:50',
            'tanggal'=> 'required|date',
            'harga' => 'required|integer|min:0'
        ]);
        registrasi::create($val);
        return redirect()->route('registrasi.index')->with('success', $val['nama'].' Berhasi di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function show(registrasi $registrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(registrasi $registrasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registrasi $registrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(registrasi $registrasi)
    {
        //
    }
}
