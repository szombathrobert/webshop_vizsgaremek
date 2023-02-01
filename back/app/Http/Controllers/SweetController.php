<?php

namespace App\Http\Controllers;

use App\Models\Sweet;
use Illuminate\Http\Request;

class SweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Sweet::with('gyarto')->get();
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
     * @param  \App\Models\Sweet  $sweet
     * @return \Illuminate\Http\Response
     */
    public function show(Sweet $sweet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sweet  $sweet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sweet $sweet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sweet  $sweet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sweet $sweet)
    {
        //
    }
}
