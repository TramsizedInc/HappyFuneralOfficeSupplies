<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\CustomerData;
use App\Models\Deceased_data;
use App\Http\Requests\StoreDeceased_dataRequest;
use App\Http\Requests\UpdateDeceased_dataRequest;
use Spatie\LaravelPdf\Facades\Pdf;
use Spatie\LaravelPdf\Enums\Format;

class DeceasedDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        if (Auth::user()->cannot('view', Deceased_data::class)) {
            
            abort(403);
        }
        return view('deceaseds.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // if (Auth::user()->cannot('create', Deceased_data::class)) {
        //     abort(403);
        // }
        return view('deceaseds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeceased_dataRequest $request)
    {
        //
        $validatedData = $request->validate([
            'exhibiting_office' => 'string',
            'deceased_name' => 'required',
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
            'weight' => 'string',
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
        
        return redirect()->route("customer.index")->with("success", "CheckType created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Deceased_data $deceased_data)
    {
        //
        if (Auth::user()->cannot('create', Deceased_data::class)) {
            abort(403);
        }
        return view('deceaseds.show', ["deceased" => $deceased_data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deceased_data $deceased_data)
    {
        //
        if (Auth::user()->cannot('create', Deceased_data::class)) {
            abort(403);
        }
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
        if (Auth::user()->cannot('create', Deceased_data::class)) {
            abort(403);
        }
        return view('deceaseds.index');
    }
}
