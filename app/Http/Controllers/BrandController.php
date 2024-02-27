<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->cannot('view', Brand::class)) {
            abort(403);
        }
        $brands = Brand::all();
        return view('brands.index',['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->cannot('create', Brand::class)) {
            abort(403);
        }
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        if (Auth::user()->cannot('create', Brand::class)) {
            abort(403);
        }

        $brand = Brand::create($request->all());
        $brand->updated_at = now();
        $brand->created_at = now();
        $brand->update();

        return redirect()->route("brands.index")->with("success", "Brand created successfully.");
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
    public function edit(Brand $brand)
    {
        if (Auth::user()->cannot('update', Brand::class)) {
            abort(403);
        }
        return view('brands.edit', ['brand' => $brand]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        if(Auth::user()->cannot('update',Brand::class)){
            abort(403);
        }
        $brand->update($request->all());
        $brand->updated_at = now();
        $brand->update();
        return redirect()->route("brands.index")->with("success", "Brand updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        if (Auth::user()->cannot('delete', Brand::class)) {
            abort(403);
        }
        $brand->delete();
        return back()->with('message','');
    }
}
