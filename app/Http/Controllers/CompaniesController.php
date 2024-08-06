<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Http\Requests\StorecompaniesRequest;
use App\Http\Requests\UpdatecompaniesRequest;

class CompaniesController extends Controller
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
    public function store(StorecompaniesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(companies $companies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(companies $companies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecompaniesRequest $request, companies $companies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(companies $companies)
    {
        //
    }
}
