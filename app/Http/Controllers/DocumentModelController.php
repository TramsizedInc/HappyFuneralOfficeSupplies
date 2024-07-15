<?php

namespace App\Http\Controllers;

use App\Models\DocumentModel;
use App\Http\Requests\StoreDocumentModelRequest;
use App\Http\Requests\UpdateDocumentModelRequest;

class DocumentModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreDocumentModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DocumentModel $documentModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DocumentModel $documentModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentModelRequest $request, DocumentModel $documentModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocumentModel $documentModel)
    {
        //
    }

    public function getCsrfToken(){
        return response()->json(['csrfToken' =>csrf_token()]);
    }
}
