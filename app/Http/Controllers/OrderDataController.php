<?php

namespace App\Http\Controllers;

use App\Models\OrderData;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderDataRequest;
use App\Http\Requests\UpdateOrderDataRequest;

class OrderDataController extends Controller
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
    public function store(StoreOrderDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderData $orderData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderData $orderData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderDataRequest $request, OrderData $orderData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderData $orderData)
    {
        //
    }
    public function print($id)
    {
        $order = OrderData::findOrFail($id);
        $deceased = Deceased_data::findOrFail($order->deceased_id);
        $customer = CustomerData::findOrFail($order->customer_id);
        $urn_insert = urn_insert_type::findOrFail($order->urn_insert_id);
        $insert = Urn::findOrFail($order->urn_id);

        return view('deceaseds.print');
    }
}
