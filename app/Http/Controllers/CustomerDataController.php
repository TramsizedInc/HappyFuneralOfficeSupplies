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
        $validatedData = $request->validate([
        'customer' => 'required',
        'born_name' => 'required',
        'zip_code' => 'required',
        'street' => 'required',
        'house_number' => 'required',
        'mother_name' => 'required',
        'birth_place_with_birth_day' => 'required',
        'mobile_number' => 'required',
        'email' => 'required|email',
        'id_card_number' => 'string',
        'id_card_expire_date' => 'date',
        'id_card_exhibition_place' => 'date',
        'exhibiting_office' => 'string',
        'address_id_number' => 'string',
        'customer_birth_day' => 'date',
        'birth_place' => 'required',
        ]);

        $model = new CustomerData();
        $model->fill($validatedData);
        $model->save();

        $model->updated_at = now();
        $model->created_at = now();
        $model->update();

        return redirect()->route("customer.index")->with("success", "CheckType created successfully.");
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
