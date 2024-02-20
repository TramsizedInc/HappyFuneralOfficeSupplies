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
        $item = Printer::create($request->all());
        $request->picture->storeAs(
            'printer_pictures',
            'printer_Img_' . $request->brand . '_'. $request->type .'.jpg',
            'public'
        );

        $fileName = 'printer_Img_' . $request->brand . '_'. $request->type .'.jpg';

        $printer = Printer::create($request->all());
        $printer->picture = $fileName;
        $printer->save();
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrinterRequest $request, Printer $printer)
    {
        //
        $printer->update($request->all());
        if($request->picture != null){
            $request->picture->storeAs(
                'printer_pictures',
                'printer_Img_' . $request->brand . '_'. $request->type .'.jpg',
                'public');                       
            $filename = 'printer_Img_' . $request->brand . '_'. $request->type .'.jpg';
            $printer->picture = $filename;
            $printer->save();   

            $printer->update();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Printer $printer)
    {
        $printer->delete();
        return redirect()->route("printers.index")->with("success", "Printer deleted successfully.");
    }
    public function show_deleted(){
        $printers = Printer::withTrashed()->get();
        return view('printers.show_deleted', ['printers' => $printers]);
    }
}
