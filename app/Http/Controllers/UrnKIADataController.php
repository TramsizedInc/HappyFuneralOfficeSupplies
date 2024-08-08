<?php

namespace App\Http\Controllers;

use App\Models\Urn_k_i_a_data;
use App\Http\Requests\StoreUrn_k_i_a_dataRequest;
use App\Http\Requests\UpdateUrn_k_i_a_dataRequest;
use Illuminate\Support\Facades\Auth;

class UrnKIADataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->cannot('view', Urn_k_i_a_data::class)) {
            return redirect('Urn_k_i_a_datas.Urn_k_i_a_datas');
        }
        $Urn_k_i_a_datas = Urn_k_i_a_data::all();
        return view('Urn_k_i_a_datas.index',['Urn_k_i_a_datas' => $Urn_k_i_a_datas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->cannot('create', Urn_k_i_a_data::class)) {
            abort(403);
        }
        return view('Urn_k_i_a_datas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUrn_k_i_a_dataRequest $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'order_uuid' => 'string|required',
            'exhibition_date' => 'date',
            'hv_done_status_date' => 'date',
            'hv_have_status_date' => 'date',
            'hv_exhibition_date' => 'date',
            'choosen_chrematory' => 'string',
            'urn_inside_form' => 'nullable|string',
            'choosen_cemetary' => 'string',
            'location' => 'string',
            'new_or_old' => 'string',
            'tombstone_number' => 'string',
            'date_of_funeral' => 'string',
            'hour_and_minute_of_funeral' => 'string',
            'hv_is_done' => 'boolean'
        ]);
        $validatedData['hv_is_done'] =  $request->input('hv_is_done') === 'on'; 
        // dd($validatedData['hv_is_done']);
        // $Urn_k_i_a_data->fill($validatedData);
        // $Urn_k_i_a_data->save();
        $Urn_k_i_a_data = Urn_k_i_a_data::create($validatedData);
        // $Urn_k_i_a_data->settable = "_urn_k_i_a_datas";
        // $Urn_k_i_a_data->setTable("_urn_k_i_a_datas");
        // $Urn_k_i_a_data->hv_is_done = $validatedData['hv_is_done'];
        // dd($Urn_k_i_a_data);
        $Urn_k_i_a_data->save();
        // $Urn_k_i_a_data->updated_at = now();
        // $Urn_k_i_a_data->created_at = now();
        // $Urn_k_i_a_data->update();
        // dd($Urn_k_i_a_data);
        // return "ok";
        // return redirect()->route("Urn_k_i_a_datas.index")->with("success", "Urn_k_i_a_data created successfully.");
        return response()->json(['success' => true, 'message' => 'urnkia mentve']);
    }

    /**
     * Display the specified resource.
     */
    /*public function show(Urn_k_i_a_data $Urn_k_i_a_data)
    {
        if (Auth::user()->cannot('viewAny', Urn_k_i_a_data::class)) {
            abort(403);
        }
        return view('Urn_k_i_a_datas.show', ['Urn_k_i_a_data' => $Urn_k_i_a_data]);
    }
*/
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Urn_k_i_a_data $Urn_k_i_a_data)
    {

        return view('Urn_k_i_a_datas.edit', ['Urn_k_i_a_data' => $Urn_k_i_a_data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUrn_k_i_a_dataRequest $request, Urn_k_i_a_data $Urn_k_i_a_data)
    {
        if (
            !(Auth::user()->cannot('updateUtilities', Urn_k_i_a_data::class)) &&
            Auth::user()->cannot('update',Urn_k_i_a_data::class)
        ) {
            $Urn_k_i_a_data->drumm_percent = $request->drumm_percent;
            $Urn_k_i_a_data->toner_percent = $request->toner_percent;
            $Urn_k_i_a_data->updated_at = now();
            $Urn_k_i_a_data->update();
            return redirect()->route("Urn_k_i_a_datas.index")->with("success", "Urn_k_i_a_data updated successfully.");
        } else if(Auth::user()->cannot('update',Urn_k_i_a_data::class)){
            abort(403);
        }
        $Urn_k_i_a_data->update($request->all());
        if($request->picture != null){
            $file_name = 'Urn_k_i_a_data_picture' . $request->brand . '_' . $request->type . '.jpg';
            $Urn_k_i_a_data->picture = $file_name;
            $request->picture->storeAs(
                'picture',
                'Urn_k_i_a_data_picture' . $request->brand . '_' . $request->type . '.jpg',
                'public');
        }
        $Urn_k_i_a_data->updated_at = now();
        $Urn_k_i_a_data->update();

        return redirect()->route("Urn_k_i_a_datas.index")->with("success", "Urn_k_i_a_data updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */

    public function updateUtilities(Urn_k_i_a_data $Urn_k_i_a_data){
        if (Auth::user()->cannot('updateUtilities', Urn_k_i_a_data::class)) {
            abort(403);
        }
        return view('Urn_k_i_a_datas.updateUtilities',['Urn_k_i_a_data' => $Urn_k_i_a_data]);
    }

    public function destroy(Urn_k_i_a_data $Urn_k_i_a_data)
    {
        if (Auth::user()->cannot('delete', Urn_k_i_a_data::class)) {
            abort(403);
        }
        $Urn_k_i_a_data->delete();
        return back()->with('message', $Urn_k_i_a_data->brand . ' ' . $Urn_k_i_a_data->type . ' was deleted Successfully');
    }

    public function show_deleted()
    {
        if (Auth::user()->cannot('view', Urn_k_i_a_data::class)) {
            abort(403);
        }
        $Urn_k_i_a_datas = Urn_k_i_a_data::withTrashed()->get();
        return view('Urn_k_i_a_datas.show_deleted',['Urn_k_i_a_datas' => $Urn_k_i_a_datas]);
    }
    private function get_boolean_value($i){
        if($i == ''){
            return false;
        }
        $falses = ['nem', 'no', 'not', '0', 'hamis', 'soha'];
        foreach ($falses as $f){
            if($i == $f){
                return false;
            }
        }
        return true;
    }
}
