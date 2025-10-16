<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmissionsRequest;
use App\Http\Requests\UpdateEmissionsRequest;
use App\Models\Emissions;

class EmissionsController extends Controller
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
    public function store(StoreEmissionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Emissions $emissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Emissions $emissions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmissionsRequest $request, Emissions $emissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Emissions $emissions)
    {
        //
    }
}
