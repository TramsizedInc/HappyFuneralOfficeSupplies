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
use App\Models\Urn_k_i_a_data;
use DateTime;

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
    /** returns all data needed for calculating cooling prices for the deceased **/
    public function GetOrderDataInfo($id){
        $orderdata = OrderData::find($id);
        // $orderdata:
        // 'customer_data_id',
        // 'deceased_data_id',
        // 'birth_certificate_id',
        // '_urn_k_i_a_datas_id',
        // $customer = $orderdata->customer_data_id;
        $deceased = Deceased_data::find($orderdata[0]->deceased_data_id);
        $urnkia = Urn_k_i_a_data::find($orderdata[0]->_urn_k_i_a_datas_id);
        $hospital = $deceased[0]->hospital_code;
        $chrematory = $urnkia[0]->choosen_chrematory;
        $cemetary = $urnkia[0]->choosen_cemetary;
        /* hv kész állapot dátum */
        $hv_done_status = $urnkia[0]->hv_done_status_date;
        $hv_have_status= $urnkia[0]->hv_have_status_date;
        /* */
        $return_array = ['chrematory' => $chrematory,
                         'cemetary' => $cemetary,
                         'kh' => $hospital,
                         'hv_kesz' => $hv_done_status,
                         'hv_van' => $hv_have_status,
                        ];
    
        return $return_array;
    }

    public function Calculation($id)
    {
        $datas = $this->GetOrderDataInfo($id);      
        $hutes_ido = HutosIdo::where('name', $datas[0]['kh_nev'])->first()->get();
        
        $hutesnap_count = 13; /** Kremanap+visszaszáll */
        $kh_beker = "KHFlór";
        $hutdate_beker = new DateTime('2024-05-19');
        $hutnap_beker = 5;
        $HV_van = false;
        $eljar_type = "normál";

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
       /**switch($eljar_type){
            case "normál":
                break;
                case "Szoros":
                    $hutesnap_count -= 5;
                    break;
                    case "SOS":
                        $hutesnap_count -= 6;
                            break;
                            case "VIPSOS":
                                $hutesnap_count -= 7;
                                    break;
                                    case "Perszonál":
                                        $hutesnap_count -= 12;
                                            break;
        }
*/
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
        switch($eljar_type){
            case "normál":
                break;
                case "Szoros":
                    $veg_osszeg = $veg_osszeg * 1.5;
                    $hutesnap_count -= 5;
                    break;
                    case "SOS":
                        $veg_osszeg = $veg_osszeg * 2;
                        $hutesnap_count -= 6;
                            break;
                            case "VIPSOS":
                                $veg_osszeg = $veg_osszeg * 3;
                                $hutesnap_count -= 7;
                                    break;
                                    case "Perszonál":
                                        $veg_osszeg = $veg_osszeg * 5;
                                        $hutesnap_count -= 12;
                                            break;
        }
        $hutdate_beker = date('Y-m-d', strtotime($hutdate_beker . '+ '.$hutesnap_count.' days'));
        $seged = array($veg_osszeg,$hutdate_beker);
        
        return $seged;
    }

    
}
