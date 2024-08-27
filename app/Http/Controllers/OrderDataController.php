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
        return view('order_data.index', ['orderdatas' => $orderdatas]);
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
        //dd($req);
        // $req['deceased_name'] = $req['deceased_hidden'];

        // $query = CustomerData::select('id')->where('id_card_number', '=', $req['id_card_number'])->toSql();
        $company = "Aevum";
        $office = "1";
        // $inner_uuid = strtoupper($company[0] . $company[1]) . $this->create_inventory_number($office, 4) . '/' . Carbon::today()->format('Ymd') . '/' . OrderData::withTrashed()->count() + 1;
        $inner_uuid = strtoupper($company[0] . $company[1]) . $this->create_inventory_number($office, 2) . '/' . Carbon::today()->format('Ymd') . '/' . $this->create_inventory_number(OrderData::withTrashed()->count() + 1, 3);
        $customer = CustomerData::select('id')->where('order_uuid', '=', $inner_uuid)->get();
        $deceased = Deceased_data::select('id')->where('order_uuid', '=', $inner_uuid)->get();
        $birth_c = BirthCertificate::select('id')->where('order_uuid', '=', $inner_uuid)->get();
        $urn_kiad = Urn_k_i_a_data::select('id')->where('order_uuid', '=', $inner_uuid)->get();
        //dd(  $customer[0]->id );
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
        //dd($unValidatedData);
        // dd(gettype($customer->items));
        $model = new OrderData();
        $model->fill($unValidatedData);
        // dd()
        $model->save();

        $model->updated_at = now();
        $model->created_at = now();
        $model->update();

        return response()->json(["success" => true, "message" => "A megrendelés mentve"]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $orderdata = OrderData::find($id);
        return view('order_data.show', ['orderdata' => $orderdata]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($orderData)
    {
       
        

        // dd($orderData);
        return view('order_data.edit', ['orderdata' => OrderData::find($orderData)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderDataRequest $request, $orderData)
    {
        //
        $order = OrderData::find($orderData);
        $order->updated_at = now();
        $order->update();
        // return redirect()->route("orderdata.index")->with('success', 'Frissítve.');
        return response()->json(['success' => true, 'message' => 'Rendelés frissítve']);
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
    public function create_inventory_number($id, $length)
    {
        $id_s = (string)$id;
        // $zeroes = strlen($id_s) - (intval($length));
        $zeroes = (intval($length)) - strlen($id_s);
        for ($i = 0; $i <= $zeroes; $i++) {
            $id_s = "0" . $id_s;
        }
        return $id_s;
    }

    /**
     * Retruns an inner id for a new case
     * 
     * @return string  
     */
    public function create_inner_uuid()
    {

        $company = "Aevum";
        $office = "1";
        $inner_uuid = strtoupper($company[0] . $company[1]) . $this->create_inventory_number($office, 2) . '/' . Carbon::today()->format('Ymd') . '/' . $this->create_inventory_number(OrderData::withTrashed()->count() + 1, 3);

        // return $inner_uuid;
        return response()->json(["inner_uuid" => $inner_uuid]);
    }
    
    public static function get_state($id){
        $order = OrderData::findOrFail($id);
        $deceased = Deceased_data::findOrFail($order->deceased_data_id);
        $customer = CustomerData::findOrFail($order->customer_data_id);
        $urn_kia = Urn_k_i_a_data::findOrFail($order->_urn_k_i_a_datas_id);
        $birth_c = BirthCertificate::findOrFail($order->birth_certificate_id);

        $order_ready = true; 
        $deceased_ready =   OrderDataController::is_model_ready($deceased);
        $customer_ready =   OrderDataController::is_model_ready($customer);
        $urn_insert_ready = OrderDataController::is_model_ready($urn_kia);
        $birth_ready =      OrderDataController::is_model_ready($birth_c);

        if (!($deceased_ready == $customer_ready && $urn_insert_ready == $birth_ready && $deceased_ready == $order_ready))
        {
            return "kitöltésre vár";
        }

        return "ki van töltve";
    }

    public function get_state_by_inner_uuid($uuid){
        $uuid = str_replace("-", "/", $uuid); 
        // dd($uuid);
        $order = OrderData::where('inner_uuid', '=', $uuid)->get();
        // dd($order[0]);
        $state = OrderDataController::get_state($order[0]->id);
        $retval = $state == "ki van töltve";
        return response()->json(["ready_state" => $retval]);
        // return response()->json(["fasz" => $uuid]);
        // return view("printers.create");
    }

    public static function is_model_ready($model)
    {
        foreach ($model->getAttributes() as $value) {
            // Check if the value is empty
            if (empty($value)) {
                return false; // Model is not ready
            }
        }

        return true; // Model is ready
    }
    public function GetOrderData($id){

    $orderdata = OrderData::find($id);

    $deceased = Deceased_data::find($orderdata->deceased_data_id);
    $customer = CustomerData::find($orderdata->customer_data_id);
    $urnkia = Urn_k_i_a_data::find($orderdata->_urn_k_i_a_datas_id);
    $birthcert = BirthCertificate::find($orderdata->birth_certificate_id);

    }
}
