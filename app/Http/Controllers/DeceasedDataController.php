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
            'exhibiting_office' => 'string',
            'deceased_name_prefix' => 'required',
            'deceased_first_name' => 'required|string',
            'deceased_last_name' => 'required|string',
            'birth_name' => 'required',
            'mother_name' => 'string',
            'zip_code' => 'string',
            'street' => 'string',
            'house_number' => 'string',
            'hospital_code' => 'string',
            'deceased_birth_day' => 'date',
            'deceased_birth_place' => 'string',
            'death_place' => 'string',
            'death_time' => 'date',
            'exhibition_time' => 'date',
            'pensioner_id' => 'string',
            'id_card_number' => 'string',
            'address_id_number' => 'string',
            'passport_number' => 'string',
            'driver_licence_number' => 'string',
            'deceased_weight' => 'string',
            //'weight' => 'string',
            'name_of_deceased' => 'string',
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
