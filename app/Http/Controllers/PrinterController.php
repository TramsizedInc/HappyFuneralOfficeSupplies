<?php

namespace App\Http\Controllers;

use App\Models\Printer;
use App\Http\Requests\StorePrinterRequest;
use App\Http\Requests\UpdatePrinterRequest;

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

        return view('printers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrinterRequest $request)
    {
        $request->picture->storeAs(
            'picture',
            'printer_picture' . $request->brand . '_' . $request->type . '.jpg',
            'public'
        );
        $file_name = 'printer_picture' . $request->brand . '_' . $request->type . '.jpg';

        $printer = Printer::create($request->all());
        $printer->picture = $file_name;
        $printer->update();

        return redirect()->route("printers.index")->with("success", "Printer created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Printer $printer)
    {
        return view('printers.show', ['printer' => $printer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Printer $printer)
    {
        //
        return view('printers.edit', ['printer' => $printer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrinterRequest $request, Printer $printer)
    {
        $printer->update($request->all());
        if($request->picture != null){
            $file_name = 'printer_picture' . $request->brand . '_' . $request->type . '.jpg';
            $printer->picture = $file_name;
            $request->picture->storeAs(
                'picture',
                'printer_picture' . $request->brand . '_' . $request->type . '.jpg',
                'public');
        }
        $printer->update();

        return redirect()->route("printers.index")->with("success", "Printer updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */

    public function updateUtilities(Printer $printer){
        return view('printers.updateUtilities',['printer' => $printer]);
    }

    public function destroy(Printer $printer)
    {
        $printer->delete();
        return back()->with('message', $printer->brand . ' ' . $printer->type . ' was deleted Successfully');
    }

    public function show_deleted()
    {
        $printers = Printer::withTrashed()->get();
        return view('printers.show_deleted',['printers' => $printers]);
    }
}
