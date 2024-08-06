<?php

namespace App\Http\Controllers;

use App\Models\BirthCertificate;
use App\Http\Requests\StoreBirthCertificateRequest;
use App\Http\Requests\UpdateBirthCertificateRequest;

class BirthCertificateController extends Controller
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
    public function store(StoreBirthCertificateRequest $request)
    {
        //
        dd($request);
        $data = $request->validate([
            'degree' => 'string',
            'job' => 'string',
            'child_count' => 'nullable|integer',
            'degree_of_relative' => 'nullable|string',
            'death_place' => 'nullable|string',
            'ash_storage_place' => 'nullable|string',
            'deceased_birth_certificate_number' => 'nullable|string',
            'wedding_birth_certificate_number' => 'nullable|string',
            'wedding_date_and_place' => 'nullable|string',
            'divorced_or_not' => 'boolean|nullable',
            'dead_husbands_count' => 'numeric|integer',
            'legally_binding_autopsy_number' => 'nullable|string',
            'selfemployee_tax_number' => 'nullable|string',
            'name_of_person' =>'string',
            'order_uuid' => 'string'
        ]);
        $data['divorced_or_not'] = $this->get_boolean_value($data['divorced_or_not']); 
        // dd($data);
        $model = BirthCertificate::create($data);
        // dd($model->toArray());
        return response()->json(['success' => true, 'message' => 'bc stored']);
    }

    /**
     * Display the specified resource.
     */
    public function show(BirthCertificate $birthCertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BirthCertificate $birthCertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBirthCertificateRequest $request, BirthCertificate $birthCertificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BirthCertificate $birthCertificate)
    {
        //
        $birthCertificate->delete();
    }
    private function get_boolean_value($i){
        if($i == ''){
            return false;
        }
        $falses = ['nem', 'no', 'not', '0', 'hamis', 'soha'];
        foreach ($falses as $f){
            if($i == $f){
                return false;
            }
        }
        return true;
    }
}
