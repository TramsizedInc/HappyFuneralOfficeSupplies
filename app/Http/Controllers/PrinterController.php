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
        return view('printers.index', ['printers' => $printers]);
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
        return view('printers.create', ['printers' => $printers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrinterRequest $request)
    {
        // if (Auth::user()->cannot('create', Printer::class)) {
        //     abort(403);
        //  }
        // $request->picture->storeAs(
        //     'picture',
        //     'printer_picture' . $request->brand . '_' . $request->type . '.jpg',
        //     'public'
        // );
        // $file_name = 'printer_picture' . $request->brand . '_' . $request->type . '.jpg';

        // $printer = Printer::create($request->all());
        // $printer->picture = $file_name;
        // $printer->updated_at = now();
        // $printer->created_at = now();
        // $printer->update();

        $printer = new  Printer(
            [
                'brand' => $request->brand,
                'type' => $request->type,
                'picture' => $request->picture,
                'documentation' => $request->documentation,
                'toner_percent' => $request->toner_percent,
                'drumm_percent' => $request->drumm_percent,
                'updated_at' => now(),
                'created_at' => now(),

            ]
        );
        $printer->save();

        return redirect()->route("printers.index")->with("success", "Printer created successfully.");
    }

    public function show($id)
    {
        if (Auth::user()->cannot('viewAny', Printer::class)) {
            abort(403);
        }
        $printer = Printer::find($id);
        return view('printers.show', ['printer' => $printer]);
    }

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
    public function update(Printer $printer, Request $request)
    {
        // Directly update the printer's attributes
        $printer->drumm_percent = $request->drumm_percent;
        $printer->toner_percent = $request->toner_percent;
        $printer->updated_at = now();

        // Save the changes to the database
        $printer->save();

        // Redirect or return a response
        return redirect()->route('printers.index')->with('success', 'Printer updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */

    public function updateUtilities(Printer $printer)
    {
        if (Auth::user()->cannot('updateUtilities', Printer::class)) {
            abort(403);
        }
        return view('printers.updateUtilities', ['printer' => $printer]);
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
        return view('printers.show_deleted', ['printers' => $printers]);
    }

    public function getPrinterData()
    {
        $printers = Printer::select('brand', 'type_of_toner', 'type_of_drumm_unit', 'created_at')
            ->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('m');
            });

        $brands = [];
        $toners = [];
        $drumUnits = [];
        $months = [];

        foreach ($printers as $month => $data) {
            $brands[] = $data->pluck('brand');
            $tonerData = $data->pluck('type_of_toner')->reject(function ($value) {
                return is_null($value) || $value === 0;
            });
            $toners[] = $tonerData->isNotEmpty() ? $tonerData->avg() : 0; // Set default value to 0
            $drumUnitData = $data->pluck('type_of_drumm_unit')->reject(function ($value) {
                return is_null($value) || $value === 0;
            });
            $drumUnits[] = $drumUnitData->isNotEmpty() ? $drumUnitData->avg() : 0; // Set default value to 0
            $months[] = Carbon::parse($data[0]->created_at)->format('M');
        }

        $compressed_data = compact('brands', 'toners', 'drumUnits', 'months');

        return view('statistics.printer', ['compressed_data' => $compressed_data]);
    }
}
