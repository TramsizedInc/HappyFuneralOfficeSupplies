<?php

namespace App\Http\Controllers;

use App\Models\CheckType;
use App\Http\Requests\StoreCheckTypeRequest;
use App\Http\Requests\UpdateCheckTypeRequest;
use Illuminate\Support\Facades\Auth;

class CheckTypeController extends Controller
{
    public function index()
    {
        // if (Auth::user()->cannot('view', CheckType::class)) {
        //     abort(403);
        // }
        $checkTypes = CheckType::all();
        return view('checkTypes.index',['checkTypes' => $checkTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // if (Auth::user()->cannot('create', CheckType::class)) {
        //     abort(403);
        // }
        return view('checkTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCheckTypeRequest $request)
    {
        // if (Auth::user()->cannot('create', CheckType::class)) {
        //     abort(403);
        // }

        $checkType = CheckType::create($request->all());
        $checkType->updated_at = now();
        $checkType->created_at = now();
        $checkType->update();

        return redirect()->route("checkTypes.index")->with("success", "CheckType created successfully.");
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
    public function edit(CheckType $checkType)
    {
        // if (Auth::user()->cannot('update', CheckType::class)) {
        //     abort(403);
        // }
        return view('checkTypes.edit', ['CheckType' => $checkType]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCheckTypeRequest $request, CheckType $checkType)
    {
        // if(Auth::user()->cannot('update',CheckType::class)){
        //     abort(403);
        // }
        $checkType->update($request->all());
        $checkType->updated_at = now();
        $checkType->update();
        return redirect()->route("checkTypes.index")->with("success", "CheckType updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CheckType $checkType)
    {
        // if (Auth::user()->cannot('delete', CheckType::class)) {
        //     abort(403);
        // }
        $checkType->delete();
        return back()->with('message','');
    }
}
