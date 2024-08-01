<?php

namespace App\Http\Controllers;

use App\Models\OrderData;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderDataRequest;
use App\Http\Requests\UpdateOrderDataRequest;
use App\Http\Controllers\UrnInsertController;
use App\Models\Urn;
use App\Models\urn_insert_type;
use App\Models\BirthCertificate;
use App\Models\CustomerData;
use App\Models\Deceased_data;
use App\Models\Urn_k_i_a_data;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;


class OrderDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderdatas = OrderData::all();
        return view('order_data.index',['orderdatas' => $orderdatas]);
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
    public function store(StoreOrderDataRequest $request)
    {
        //
        $req = $request->all();
        // dd($req);
        // $req['deceased_name'] = $req['deceased_hidden'];
        $customer = CustomerData::select('id')->where('id_card_number', '=', $req['id_card_number'])->get();
        $deceased = Deceased_data::select('id')->where('customer_id_card_number', '=', $req['id_card_number'])->orderby('created_at', 'desc')->limit(1)->get();
        $birth_c = BirthCertificate::select('id')->where('deceased_id_card_number', '=', $req['id_card_number'])->orderby('created_at', 'desc')->limit(1)->get();
        $urn_kiad = Urn_k_i_a_data::select('id')->where('deceased_id_card_number', '=', $req['id_card_number'])->orderby('created_at', 'desc')->limit(1)->get();
        // $query = CustomerData::select('id')->where('id_card_number', '=', $req['id_card_number'])->toSql();
        $company = "Aevum";
        $office = "1";
        $inner_uuid = strtoupper($company[0] . $company[1]) . $this->create_inventory_number($office,2). '/'. Carbon::today()->format('Ymd') . '/' . OrderData::count();

        // dd(Log::info($query)->toArray());
        // Log::info($query);
        // dd($customer[0]->id);
        $unValidatedData = [
            'customer_data_id' => $customer[0]->id,
            'deceased_data_id' => $deceased[0]->id,
            '_urn_k_i_a_datas_id' => $urn_kiad[0]->id,
            'birth_certificate_id' => $birth_c[0]->id,
            'inner_uuid' => $inner_uuid,
        ];
        // dd($unValidatedData);
        // dd(gettype($customer->items));
        $model = new OrderData();
        $model->fill($unValidatedData);
        // dd()
        $model->save();

        $model->updated_at = now();
        $model->created_at = now();
        $model->update();
    
        // return response()->json(['success' => true, 'message' => 'rendelés mentve', 'model_id' => $model->id]);
        return view("hutesIdo.index", ['id' => $model->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderData $orderData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderData $orderData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderDataRequest $request, OrderData $orderData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderData $orderData)
    {
        //
    }
    public function print($id)
    {
        $order = OrderData::findOrFail($id);
        $deceased = Deceased_data::findOrFail($order->deceased_id);
        $customer = CustomerData::findOrFail($order->customer_id);
        $urn_insert = urn_insert_type::findOrFail($order->urn_insert_id);
        $insert = Urn::findOrFail($order->urn_id);

        return view('deceaseds.print');
    }

    /**
     * Retruns a number formatted to start with zeroes, and its length can be set
     * 
     * @param int|string $id The id that needs to be converted to the appripriate format
     * @param int|string $length The length of the resulting string
     * 
     * @return string  
     */
    public function create_inventory_number($id, $length){
        $id_s = (string)$id;
        $zeroes = strlen($id_s) - (intval($length));
        for ($i = 0; $i<=$zeroes; $i++){
            $id_s = "0".$id_s;
        }
        return $id_s;
    }

    /**
     * Retruns an inner id for a new case
     * 
     * @return string  
     */
    public function create_inner_uuid(){

        $company = "Aevum";
        $office = "1";
        $inner_uuid = strtoupper($company[0] . $company[1]) . $this->create_inventory_number($office,2). '/'. Carbon::today()->format('Ymd') . '/' .( OrderData::count()+1);
        
        return $inner_uuid;
    }
}
