<?php

namespace App\Http\Controllers;

use App\Models\HutosIdo;
use App\Http\Requests\StoreHutosIdoRequest;
use App\Http\Requests\UpdateHutosIdoRequest;
use App\Models\OrderData;
// use App\Http\Controllers\DB;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Deceased_data;

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

        return view('hutesIdo.create');
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
        
        $hutesnap_count = 13; /** Kremanap+visszaszáll */
        $kh_beker = "KHFlór";
        $hutev_beker = 2024;
        $huthonap_beker = 5;
        $hutnap_beker = 5;
        $HV_van = false;
        $Atalany1 = DB::HutosIdo('atal1_ar')->where('kh_name', $kh_beker)->first();
        $Atalany2 = DB::HutosIdo('atal2_ar')->where('kh_name', $kh_beker)->first();
        $Pot = DB::HutosIdo('pot')->where('kh_name', $kh_beker)->first();
        $atal1 = DB::HutosIdo('atal1')->where('kh_name', $kh_beker)->first();
        $atal2 = DB::HutosIdo('atal2')->where('kh_name', $kh_beker)->first();
        $plusz_koltsseg = DB::HutosIdo('plusz_koltsseg')->where('kh_name', $kh_beker)->first();
        $veg_osszeg = $Atalany1;
        if($HV_van != true){
             $hutesnap_count += 2;
        }
        
        if($hutesnap_count > $atal1){
            $veg_osszeg += $Atalany2;
        }

        if($hutesnap_count >= $atal2 + $atal1){
            $var = $hutnap_beker - $atal1 + $atal2;
             $veg_osszeg += $Pot * $var;
        }
        if($plusz_koltsseg != null){
            $veg_osszeg += $plusz_koltsseg;
        }


    }

    public function GetOrderDataInfo($id){
        $orderdata = OrderData::find($id);
        // $orderdata:
        // 'customer_data_id',
        // 'deceased_data_id',
        // 'birth_certificate_id',
        // '_urn_k_i_a_datas_id',
        // $customer = $orderdata->customer_data_id;
        $deceased = Deceased_data::find($orderdata[0]->deceased_data_id);
        $hospital = $deceased[0]->hospital_code;

    }
}
