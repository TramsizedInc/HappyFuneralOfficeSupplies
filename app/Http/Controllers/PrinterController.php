<?php

namespace App\Http\Controllers;

use App\Models\Printer;
use App\Http\Requests\StorePrinterRequest;
use App\Http\Requests\UpdatePrinterRequest;
use Illuminate\Support\Facades\Auth;

class PrinterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->cannot('view', Printer::class)) {
            return redirect('dashboard');
        }
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
        return view('printers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrinterRequest $request)
    {
        if (Auth::user()->cannot('create', Printer::class)) {
            abort(403);
        }
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
        if (!(Auth::user()->cannot('updateUtilities', Printer::class))) {
            $printer->drumm_percent = $request->drumm_percent;
            $printer->toner_percent = $request->toner_percent;
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
}
