<?php

namespace App\Http\Controllers;

use App\Models\CheckModel;
use App\Http\Requests\StoreCheckModelRequest;
use App\Http\Requests\UpdateCheckModelRequest;
use http\Client;
use Illuminate\Support\Facades\Auth;

class CheckModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->cannot('view', CheckModel::class)) {
            abort(403);
        }
        $checkModels = CheckModel::all();
        return view('checkModels.index',['checkModels' => $checkModels]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->cannot('create', CheckModel::class)) {
            abort(403);
        }
        return view('checkModels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCheckModelRequest $request)
    {
        if (Auth::user()->cannot('create', CheckModel::class)) {
            abort(403);
        }

        $checkModel = CheckModel::create($request->all());
        $checkModel->updated_at = now();
        $checkModel->created_at = now();
        $checkModel->update();

        return redirect()->route("checkModels.index")->with("success", "CheckModel created successfully.");
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
    public function edit(CheckModel $checkModel)
    {
        if (Auth::user()->cannot('update', CheckModel::class)) {
            abort(403);
        }
        return view('checkModels.edit', ['checkModel' => $checkModel]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCheckModelRequest $request, CheckModel $checkModel)
    {
        if(Auth::user()->cannot('update',CheckModel::class)){
            abort(403);
        }
        $checkModel->update($request->all());
        $checkModel->updated_at = now();
        $checkModel->update();
        return redirect()->route("checkModels.index")->with("success", "CheckModel updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CheckModel $checkModel)
    {
        if (Auth::user()->cannot('delete', CheckModel::class)) {
            abort(403);
        }
        $checkModel->delete();
        return back()->with('delete','Csekk törölve');
    }
}
