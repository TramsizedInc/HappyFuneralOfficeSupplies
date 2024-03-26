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
        $data = $request->validate([
            'degree' => 'required|string',
            'job' => 'required|string',
            'child_count' => 'required|integer',
            'degree_of_relative' => 'required|string',
            'death_place' => 'required|string',
            'ash_storage_place' => 'required|string',
            'deceased_birth_certificate_number' => 'required|string',
            'wedding_birth_certificate_number' => 'required|string',
            'wedding_date_and_place' => 'nullable|string',
            'divorced_or_not' => 'required|boolean',
            'dead_husbands_count' => 'required|integer',
            'legally_binding_autopsy_number' => 'required|string',
            'selfemployee_tax_number' => 'nullable|string',
        ]);
        $model = BirthCertificate::create($data);
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
}
