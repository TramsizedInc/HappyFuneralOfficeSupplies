<?php

namespace App\Http\Controllers;

use App\Models\Printer;
use App\Http\Requests\StorePrinterRequest;
use App\Http\Requests\UpdatePrinterRequest;
use App\View\Components\filters;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\Component\filer;

class PrinterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $printers = Printer::all();
        return view('printers.index',['printers' => $printers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->cannot('create', Printer::class)) {
            abort(403);
        }
        $printers = Printer::all();
        return view('printers.create',['printers' => $printers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrinterRequest $request)
    {
        // if (Auth::user()->cannot('create', Printer::class)) {
        //     abort(403);
        // }
        $request->picture->storeAs(
            'picture',
            'printer_picture' . $request->brand . '_' . $request->type . '.jpg',
            'public'
        );
        $file_name = 'printer_picture' . $request->brand . '_' . $request->type . '.jpg';

        $printer = Printer::create($request->all());
        $printer->picture = $file_name;
        $printer->updated_at = now();
        $printer->created_at = now();
        $printer->update();

        return redirect()->route("printers.index")->with("success", "Printer created successfully.");
    }

    /**
     * Display the specified resource.
     */
    /*public function show(Printer $printer)
    {
        if (Auth::user()->cannot('viewAny', Printer::class)) {
            abort(403);
        }
        return view('printers.show', ['printer' => $printer]);
    }
*/
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Printer $printer)
    {
        if (Auth::user()->cannot('update', Printer::class)) {
            abort(403);
        }
        return view('printers.edit', ['printer' => $printer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrinterRequest $request, Printer $printer)
    {
        if (
            !(Auth::user()->cannot('updateUtilities', Printer::class)) &&
            Auth::user()->cannot('update',Printer::class)
        ) {
            $printer->drumm_percent = $request->drumm_percent;
            $printer->toner_percent = $request->toner_percent;
            $printer->updated_at = now();
            $printer->update();
            return redirect()->route("printers.index")->with("success", "Printer updated successfully.");
        } else if(Auth::user()->cannot('update',Printer::class)){
            abort(403);
        }
        $printer->update($request->all());
        if($request->picture != null){
            $file_name = 'printer_picture' . $request->brand . '_' . $request->type . '.jpg';
            $printer->picture = $file_name;
            $request->picture->storeAs(
                'picture',
                'printer_picture' . $request->brand . '_' . $request->type . '.jpg',
                'public');
        }
        $printer->updated_at = now();
        $printer->update();

        return redirect()->route("printers.index")->with("success", "Printer updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */

    public function updateUtilities(Printer $printer){
        if (Auth::user()->cannot('updateUtilities', Printer::class)) {
            abort(403);
        }
        return view('printers.updateUtilities',['printer' => $printer]);
    }

    public function destroy(Printer $printer)
    {
        if (Auth::user()->cannot('delete', Printer::class)) {
            abort(403);
        }
        $printer->delete();
        return back()->with('message', $printer->brand . ' ' . $printer->type . ' was deleted Successfully');
    }

    public function show_deleted()
    {
        if (Auth::user()->cannot('view', Printer::class)) {
            abort(403);
        }
        $printers = Printer::withTrashed()->get();
        return view('printers.show_deleted',['printers' => $printers]);
    }

    public function getPrinterData(Request $request)
{ 
    $printerData = Printer::where('printer_id',$request->printer)

    ->when($request->from,function($query)use($request){
        return $query->whereDate('date','>=',$request->from);

    })
    ->when($request->to,function($query) use ($request){
        return $query->whereDate('date','<=',$request->to);
    })
    ->selectRaw('brand, type, type_of_toner,type_of_drumm_unit, GROUP BY MONTh(created_at) as period')
    ->first();
    

    $printer = Printer::where('id',$request->printer)->first()->brand; 
    if($printerData == null || $printer == null){
        return response(['printer' => 'printer' , 'printerData' => ['brand' => '0', 'type' => '0', 'type_of_toner' => '0', 'period' => Carbon::now()->month]]);
    } 
    return response()->json(['printer'=>$printer,'printerData'=>$printerData]);
}
}
