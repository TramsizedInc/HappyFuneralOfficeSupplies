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
        //Csongor kibaszott dokumentációja:        
        //UwU :3
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
        //dd($orderdata->deceased_data_id);
        // $orderdata:
        // 'customer_data_id',
        // 'deceased_data_id',
        // 'birth_certificate_id',
        // '_urn_k_i_a_datas_id',
        // $customer = $orderdata->customer_data_id;
        $deceased = Deceased_data::find($orderdata->deceased_data_id);
        
        $urnkia = Urn_k_i_a_data::find($orderdata->_urn_k_i_a_datas_id);
        $hospital =   $deceased->hospital_code;
        $death_time = $deceased->death_time;
        $chrematory =   $urnkia->choosen_chrematory;
        $cemetary =     $urnkia->choosen_cemetary;
        /* hv kész állapot dátum */
        $hv_done_status = $urnkia->hv_done_status_date;
        $hv_have_status=  $urnkia->hv_have_status_date;
        $boncolva = $urnkia->hv_is_done;

        /* */
        $return_array = ['chrematory' => $chrematory,
                         'cemetary' => $cemetary,
                         'kh_nev' => $hospital,
                         'hv_kesz' => $hv_done_status,
                         'hv_van_date' => $hv_have_status,
                         'hv_van' =>  $boncolva,
                         'halal_ido' => $death_time,
                        ];

        return $return_array;
    }

    public function GetHospitalCoolingPrices($hospital_name){
        //$hospital = HutosIdo::select('kh_name', $hospital_name)->limit(1)->get();
        $hospital = HutosIdo::where('kh_name', '=', $hospital_name)->first();
        
        $at2 =   $hospital->atal2_ar;
        $at1 =   $hospital->atal1_ar;
        $pot =   $hospital->pot_ar;
        $pot_days =   $hospital->pot;
        $atal1 = $hospital->atal1;
        $atal2 = $hospital->atal2;
        $plusz_koltsseg = $hospital->plusz_koltsseg;
        $plusz_koltsseg_ar = $hospital->plusz_koltsseg_ar;
        return ['atal1_ar' => $at1,
                'atal2_ar' => $at2,
                'pot_ar' => $pot,
                'atal1' => $atal1,
                'atal2' => $atal2,
                'plusz_koltsseg' => $plusz_koltsseg,
                'plusz_koltsseg_ar' => $plusz_koltsseg_ar,
                'pot_days' => $pot_days,
                ];
    }

    public function Calculation($id)
    {
        $datas = $this->GetOrderDataInfo($id);
        $datas2 = $this->GetHospitalCoolingPrices($datas['kh_nev']);      
        $hutesnap_count = 13; /** Kremanap+visszaszáll */
        $hutdate_beker = new DateTime($datas['halal_ido']);
        $HV_van = $datas['hv_van'];

        $eljar_type = "normál";
        $Atalany1 = $datas2['atal1_ar'];
        $Atalany2 = $datas2['atal2_ar'];
        $Pot = $datas2['pot_ar'];
        $atal1 = $datas2['atal1'];
        $atal2 = $datas2['atal2'];
        $plusz_koltsseg = $datas2['plusz_koltsseg_ar'];
        $veg_osszeg = $Atalany1;
        if($HV_van != true){
             $hutesnap_count += 3;
        }

        if($hutesnap_count > $atal1){
            $veg_osszeg += $Atalany2;
        }

        if($hutesnap_count > $atal2 + $atal1){
            $var = $hutesnap_count - $atal1 + $atal2;
            $veg_osszeg += $Pot * $var;
        }
        if($plusz_koltsseg != null){
            $veg_osszeg += $plusz_koltsseg;
        }
        $formattedHutdateBeker = $hutdate_beker->format('Y-m-d');
        $hutdate_beker = date('Y-m-d', strtotime($formattedHutdateBeker. '+ '.$hutesnap_count.' days'));
        /* returning an associative array with custom IDs for the values */
        // Format the DateTime object to match the expected "yyyy-MM-dd" format
        //$formattedDate = $hutdate_beker->format('Y-m-d'); // Note: 'Y-m-d' corresponds to 'yyyy-MM-dd'
        return response()->json(["success"=> true, "szumma" => $veg_osszeg, "vegnap" => $hutdate_beker, "pot" => $Pot, "days" => $hutesnap_count, "hospital" => $datas['kh_nev'], "hv_van" => $HV_van, "hv_date" => $datas['hv_kesz'], "hv_kesz_date" => $datas['hv_van_date'], "krema" => $datas['chrematory'], "halal" => $datas['halal_ido'], 'atal1' => $Atalany1, 'atal2' => $Atalany2, 'atal1_days' => $atal1, 'atal2_days' => $atal2,'pot_days' => $datas2['pot_days'],]);
    }

    
}
