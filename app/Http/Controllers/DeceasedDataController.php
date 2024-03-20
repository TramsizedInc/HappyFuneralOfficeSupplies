<?php

namespace App\Http\Controllers;

use App\Models\Deceased_data;
use App\Http\Requests\StoreDeceased_dataRequest;
use App\Http\Requests\UpdateDeceased_dataRequest;

class DeceasedDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (Auth::user()->cannot('create', Deceased_data::class)) {
            abort(403);
        }
        return view('deceaseds.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->cannot('create', Deceased_data::class)) {
            abort(403);
        }
        return view('deceaseds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeceased_dataRequest $request)
    {
        //
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
