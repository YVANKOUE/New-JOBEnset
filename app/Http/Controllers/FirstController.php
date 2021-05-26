<?php

namespace App\Http\Controllers;

use App\Models\first;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('annonce');
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
     * @param  \App\Models\first  $first
     * @return \Illuminate\Http\Response
     */
    public function show(first $first)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\first  $first
     * @return \Illuminate\Http\Response
     */
    public function edit(first $first)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\first  $first
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, first $first)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\first  $first
     * @return \Illuminate\Http\Response
     */
    public function destroy(first $first)
    {
        //
    }
}
