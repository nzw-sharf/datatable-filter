<?php

namespace App\Http\Controllers;

use App\Models\Bathroom;
use App\Http\Requests\StoreBathroomRequest;
use App\Http\Requests\UpdateBathroomRequest;

class BathroomController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBathroomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bathroom $bathroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bathroom $bathroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBathroomRequest $request, Bathroom $bathroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bathroom $bathroom)
    {
        //
    }
}
