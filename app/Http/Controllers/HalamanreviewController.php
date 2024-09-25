<?php

namespace App\Http\Controllers;

use App\Models\halamanreview;
use Illuminate\Http\Request;

class HalamanreviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('halamanreview.index');
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
     * @param  \App\Models\halamanreview  $halamanreview
     * @return \Illuminate\Http\Response
     */
    public function show(halamanreview $halamanreview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\halamanreview  $halamanreview
     * @return \Illuminate\Http\Response
     */
    public function edit(halamanreview $halamanreview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\halamanreview  $halamanreview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, halamanreview $halamanreview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\halamanreview  $halamanreview
     * @return \Illuminate\Http\Response
     */
    public function destroy(halamanreview $halamanreview)
    {
        //
    }
}
