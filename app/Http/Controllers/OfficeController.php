<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Http\Requests\StoreOfficeRequest;
use App\Http\Requests\UpdateOfficeRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->cannot('view', Office::class)) {
            abort(403);
        }
        $offices = Office::all();
        return view('offices.index',['offices' => $offices]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->cannot('create', Office::class)) {
            abort(403);
        }
        return view('offices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOfficeRequest $request)
    {
        if (Auth::user()->cannot('create', Office::class)) {
            abort(403);
        }

        $office = Office::create($request->all());
        $office->updated_at = now();
        $office->created_at = now();
        $office->update();

        return redirect()->route("offices.index")->with("success", "Office created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Office $office)
    {
        if (Auth::user()->cannot('update', Office::class)) {
            abort(403);
        }
        return view('offices.edit', ['office' => $office]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOfficeRequest $request, Office $office)
    {
        if(Auth::user()->cannot('update',Office::class)){
            abort(403);
        }
        $office->update($request->all());
        $office->updated_at = now();
        $office->update();
        return redirect()->route("offices.index")->with("success", "Office updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Office $office)
    {
        if (Auth::user()->cannot('delete', Office::class)) {
            abort(403);
        }
        $office->delete();
        return back()->with('message','');
    }
}
