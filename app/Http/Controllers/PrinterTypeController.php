<?php

namespace App\Http\Controllers;


use App\Models\PrinterType;
use App\Http\Requests\StorePrinterTypeRequest;
use App\Http\Requests\UpdatePrinterTypeRequest;
use Illuminate\Support\Facades\Auth;

class PrinterTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->cannot('view', PrinterType::class)) {
            abort(403);
        }
        $printerTypes = PrinterType::all();
        return view('printerTypes.index',['printerTypes' => $printerTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->cannot('create', PrinterType::class)) {
            abort(403);
        }
        return view('printerTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrinterTypeRequest $request)
    {
        if (Auth::user()->cannot('create', PrinterType::class)) {
            abort(403);
        }

        $printerType = PrinterType::create($request->all());
        $printerType->updated_at = now();
        $printerType->created_at = now();
        $printerType->update();

        return redirect()->route("printerTypes.index")->with("success", "PrinterType created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrinterType $printerType)
    {
        if (Auth::user()->cannot('update', PrinterType::class)) {
            abort(403);
        }
        return view('printerTypes.edit', ['printerType' => $printerType]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrinterTypeRequest $request, PrinterType $printerType)
    {
        if(Auth::user()->cannot('update',PrinterType::class)){
            abort(403);
        }
        $printerType->update($request->all());
        $printerType->updated_at = now();
        $printerType->update();
        return redirect()->route("printerTypes.index")->with("success", "Office updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrinterType $printerType)
    {
        if (Auth::user()->cannot('delete', PrinterType::class)) {
            abort(403);
        }
        $printerType->delete();
        return back()->with('message','');
    }
}
