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
        if (Auth::user()->cannot('create', CustomerData::class)) {
            abort(403);
        }
        return view('customer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->cannot('create', CustomerData::class)) {
            abort(403);
        }
        return view('customer.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerDataRequest $request)
    {
        //
        $validatedData = $request->validate([
        'nation' => 'required|string',
        'customer' => 'required',
        'born_name' => 'required',
        'zip_code' => 'required',
        'street' => 'required',
        'house_number' => 'required',
        'mother_name' => 'required',
        // 'birth_place_with_birth_day' => 'required',
        'city' => 'string',
        'mobile_number' => 'required',
        'email' => 'required|email',
        'id_card_number' => 'string',
        'id_card_expire_date' => 'date',
        'id_card_exhibition_place' => 'string',
        'exhibiting_office' => 'string',
        'address_id_number' => 'string',
        'customer_birth_day' => 'date',
        'birth_place' => 'required',
        ]);
        $model = new CustomerData();
        $model->fill($validatedData);
        $mobile_number = join(explode('-', $model->mobile_number));
        $model->mobile_number = (int) $mobile_number;
        $model->customer_birth_day = $request->validate(['birth_day' => 'required|date'])['birth_day'];
        $model->birth_place_with_birth_day = $model->birth_place .' '. $model->customer_birth_day;
        $model->address = $model->zip_code ." ". $validatedData['city'] ." ". $model->street ." ". $model->house_number;
        $model->city = $validatedData['city'];
        $model->save();
        $model->updated_at = now();
        $model->created_at = now();
        $model->update();

        // return redirect()->route("customer.index")->with("success", "CheckType created successfully.");
        return response()->json(['success' => true, 'message' => 'customer mentve']);
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerData $customerData)
    {
        if (Auth::user()->cannot('create', CustomerData::class)) {
            abort(403);
        }
        return view('customer.show', ["customer" => $customerData]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerData $customerData)
    {
        if (Auth::user()->cannot('create', CustomerData::class)) {
            abort(403);
        }
        return view('customer.edit');
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
        if (Auth::user()->cannot('create', CustomerData::class)) {
            abort(403);
        }
        return view('customer.index');
    }
}
