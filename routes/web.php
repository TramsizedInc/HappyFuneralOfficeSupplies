<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/printers', App\Http\Controllers\PrinterController::class);
    Route::get('/printers/updateUtilities/{printer}',[\App\Http\Controllers\PrinterController::class,'updateUtilities'])->name('printers.updateUtilities');
    Route::resource('/brands', App\Http\Controllers\BrandController::class);
    Route::resource('/checkTypes', App\Http\Controllers\CheckTypeController::class);
    Route::resource('/printerTypes', App\Http\Controllers\PrinterTypeController::class);
    Route::resource('/offices',App\Http\Controllers\OfficeController::class);
    Route::resource('/checkModels', \App\Http\Controllers\CheckModelController::class);
    Route::put('/checkModels/pay/{checkModel}',[\App\Http\Controllers\CheckModelController::class,'pay'])->name('checkModels.pay');

});

require __DIR__.'/auth.php';
