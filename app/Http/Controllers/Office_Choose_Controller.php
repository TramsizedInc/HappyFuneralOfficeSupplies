<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;
use Spatie\LaravelPdf\Enums\Format;

class Office_Choose_Controller extends Controller
{
   
    public function select()
{
    $offices = Office::all();
    return view('select_office', ['offices' => $offices]);
}

    public function store(Request $request)
{
    $request->validate([
        'office_id' => 'required|exists:offices,id',
    ]);

    $user = Auth::user();
    $user->update(['office_id' => $request->office_id]);

    return redirect()->route('dashboard');
}

}
