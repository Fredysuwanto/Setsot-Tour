<?php

namespace App\Http\Controllers;

use App\Models\halamandetail;
use Illuminate\Http\Request;

class HalamandetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('halamandetail.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\halamandetail  $halamandetail
     * @return \Illuminate\Http\Response
     */
    public function show(halamandetail $halamandetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\halamandetail  $halamandetail
     * @return \Illuminate\Http\Response
     */
    public function edit(halamandetail $halamandetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\halamandetail  $halamandetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, halamandetail $halamandetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\halamandetail  $halamandetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(halamandetail $halamandetail)
    {
        //
    }
}
