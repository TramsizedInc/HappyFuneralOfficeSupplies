<?php

namespace App\Http\Controllers;

use App\Models\OrderData;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderDataRequest;
use App\Http\Requests\UpdateOrderDataRequest;
use App\Http\Controllers\UrnInsertController;
use App\Models\Urn;
use App\Models\urn_insert_type;
use App\Models\BirthCertificate;
use App\Models\CustomerData;
use App\Models\Deceased_data;
use App\Models\Urn_k_i_a_data;

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
        $req = $request->all();
        $customer = CustomerData::select('id')->where('id_card_number', '=', $req['id_card_number'])->get();
        $deceased = Deceased_data::select('id')->where('deceased_name', '=', $req['deceased_name'])->orderby('created_at', 'desc')->limit(1)->get();
        $birth_c = BirthCertificate::select('id')->where('name_of_person', '=', $req['name_of_person'])->orderby('created_at', 'desc')->limit(1)->get();
        $urn_kiad = Urn_k_i_a_data::select('id')->where('name_of_deceased', '=', $req['name_of_deceased'])->orderby('created_at', 'desc')->limit(1)->get();
        $unValidatedData = [
            $customer,
            $deceased,
            $urn_kiad,
            $birth_c,
        ];

        $model = new OrderData();
        $model->fill($unValidatedData);
        $model->save();

        $model->updated_at = now();
        $model->created_at = now();
        $model->update();

    
        // $name = $model->deceased_name;

        // return redirect()->route("customer.index")->with("success", "CheckType created successfully.");
        return 'ok';
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
