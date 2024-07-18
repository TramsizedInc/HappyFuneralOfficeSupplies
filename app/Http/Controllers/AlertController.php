<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use App\Http\Requests\StoreAlertRequest;
use App\Http\Requests\UpdateAlertRequest;

class AlertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('alerts.index');
    }


}
