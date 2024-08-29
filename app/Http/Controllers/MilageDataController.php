<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\MilageData;
use App\Http\Requests\StoreMilageDataRequest;
use App\Http\Requests\UpdateMilageDataRequest;

class MilageDataController extends Controller
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
        return view('milage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMilageDataRequest $request)
    {
        //
        $model = new MilageData();
        $validated_data = $request->validate([
            'license' => 'string|required',
            'driver' => 'string|required',
            'milage' => 'numeric|integer|required',
            'fuel_price' => 'numeric|integer|nullable',
            'fuel_amount' => 'numeric|integer|nullable',
        ]);
        $model->fill($validated_data);
        $model->save();
        $model->created_by = auth()->user->id;
        $model->update();
    }

    /**
     * Display the specified resource.
     */
    public function show($license_plate)
    {
        //
        $milages = MilageData::where('license_plate', $license_plate)->get();
        return view('milage.show', ['milages' => $milages]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($milageData)
    {
        $milage = MilageData::find($milageData);
        return view('milage.dit', ['milage' => $milage]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMilageDataRequest $request, $milageData)
    {
        //
        $model = MilageData::find($milageData);
        $validated_data = $request->validate([
            'license' => 'string|required',
            'driver' => 'string|required',
            'milage' => 'numeric|integer|required',
            'fuel_price' => 'numeric|integer|nullable',
            'fuel_amount' => 'numeric|integer|nullable',
        ]);
        $model->fill($validated_data);
        $model->updated_by = auth()->user->id;
        $model->update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($milageData)
    {
        //
        $model = MilageData::find($milageData);
        $model->delete();
        $model->deleted_by = auth()->user->id;
    }
}
