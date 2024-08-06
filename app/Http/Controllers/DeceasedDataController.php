<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\CustomerData;
use App\Models\Deceased_data;
use App\Models\OrderData;
use App\Http\Requests\StoreDeceased_dataRequest;
use App\Http\Requests\UpdateDeceased_dataRequest;
use Spatie\LaravelPdf\Facades\Pdf;
use Spatie\LaravelPdf\Enums\Format;
use App\Http\Controllers\OrderDataController;

class DeceasedDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $orderdatas = OrderData::all();
        // dd($orderdatas);
        return view('deceaseds.index', ['orderdatas' => $orderdatas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // if (Auth::user()->cannot('create', Deceased_data::class)) {
        //     abort(403);
        // }
        $orderdata = new OrderDataController();
        $deceased_uuid = $orderdata->create_inner_uuid();
        return view('deceaseds.create', ['deceased_uuid' => $deceased_uuid]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeceased_dataRequest $request)
    {
        
        $validatedData = $request->validate([
            'exhibiting_office' =>   'nullable|string',
            'deceased_name_prefix' =>'nullable|string',
            'deceased_first_name' => 'nullable|string',
            'deceased_last_name' =>  'nullable|string',
            'birth_name' => 'nullable|string',
            'mother_name' => 'nullable|string',
            'zip_code' => 'nullable|string',
            'street' => 'nullable|string',
            'house_number' => 'nullable|string',
            'hospital_code' => 'nullable|string',
            'deceased_birth_day' => 'nullable|date',
            'deceased_birth_place' => 'nullable|string',
            'death_place' => 'nullable|string',
            'death_time' => 'nullable|date',
            'exhibition_time' => 'nullable|date',
            'pensioner_id' => 'nullable|string',
            'id_card_number' => 'nullable|string',
            'address_id_number' => 'nullable|string',
            'passport_number' => 'nullable|string',
            'driver_licence_number' => 'nullable|string',
            'deceased_weight' => 'nullable|string',
            'weight' => 'nullable|numeric',
            'order_uuid' => 'nullable|string',
        ]);
        
        $model = new Deceased_data();
        $model->fill($validatedData);

        $model->save();

        $model->updated_at = now();
        $model->created_at = now();
        $model->update();

    
        $name = $model->deceased_name;

        // Pdf::view('create')
        // ->format('A4')
        // ->save('pdf/{0}.pdf',$name);
        
        return response()->json(['success' => true, 'message' => 'deceased mentve']);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
         return view('deceaseds.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deceased_data $deceased_data)
    {
        //
        return view('deceaseds.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeceased_dataRequest $request, Deceased_data $deceased_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Deceased_data $deceased_data)
    {
        //
        return view('deceaseds.index');
    }

    public function print()
    {
        // $order = OrderData::findOrFail();
        // $deceased = Deceased_data::findOrFail($order->deceased_id);
        // // $customer = CustomerData::findOrFail($order->customer_id);
        // // $urn_insert = urn_insert_type::findOrFail($order->urn_insert_id);
        // // $insert = Urn::findOrFail($order->urn_id);
        return view('deceaseds.print');
    }
}
