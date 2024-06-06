<?php

namespace App\Http\Controllers;

use App\Models\HutosIdo;
use App\Http\Requests\StoreHutosIdoRequest;
use App\Http\Requests\UpdateHutosIdoRequest;
// use App\Http\Controllers\DB;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HutosIdoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //UwU
        return view('hutesIdo.index');
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
    public function store(StoreHutosIdoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HutosIdo $hutosIdo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HutosIdo $hutosIdo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHutosIdoRequest $request, HutosIdo $hutosIdo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HutosIdo $hutosIdo)
    {
        //
    }

    public function Calculation(HutosIdo $hutosIdo)
    {
        $kh_beker = "KHFlór";
        $Atalany1 = DB::HutosIdo('atal1_ar')->where('kh_name', $kh_beker)->first();
        $Atalany2 = DB::HutosIdo('atal2_ar')->where('kh_name', $kh_beker)->first();
        $Pot = DB::HutosIdo('pot')->where('kh_name', $kh_beker)->first();
        $atal1 = DB::HutosIdo('atal1')->where('kh_name', $kh_beker)->first();
        $atal2 = DB::HutosIdo('atal2')->where('kh_name', $kh_beker)->first();
    }
}
