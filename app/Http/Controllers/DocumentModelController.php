<?php

namespace App\Http\Controllers;

use App\Models\DocumentModel;
use App\Http\Requests\StoreDocumentModelRequest;
use App\Http\Requests\UpdateDocumentModelRequest;
use Illuminate\Http\JsonResponse;

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
     * Get a document by its unique document_name
     * 
     * @param string $documentName The unique name of the document.
     * @return JsonResponse An HTTP code, a root for getting the document and its properties necessary for editing
     */
    public function get_document($documentName)
    {
        //route: protocol://domain.postfix/document/save_document/{documentName}
        //gets a documentname, and a json containing the document, and saves the changes

        $document = DocumentModel::findByDocumentName($documentName);
        return response()->json($document->inner_data);
    }

    /**
     * Select a document by its unique document_name and change its parameters
     *
     * @param string $documentName The unique name of the document.
     * @return JsonResponse An HTTP code, a root for getting the document and its properties necessary for editing
     */
    public function edit($documentName)
    {
        //route: protocol://domain.postfix/document/save_document/{documentName}
        //gets a documentname, and a json containing the document, and saves the changes

        $document = DocumentModel::findByDocumentName($documentName);
        $response = new JsonResponse();
        // $response::stat
        if($document == null){
            return response("document not found", 404)->json(['success' => false, 'message' => "No document with this name"]);
        }

        return new JsonResponse([""]);
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
