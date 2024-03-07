<?php

namespace App\Http\Controllers;

use App\Models\CustomerData;
use App\Http\Requests\StoreCustomerDataRequest;
use App\Http\Requests\UpdateCustomerDataRequest;

class CustomerDataController extends Controller
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
    public function store(StoreCustomerDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerData $customerData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerData $customerData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerDataRequest $request, CustomerData $customerData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerData $customerData)
    {
        //
    }
}
