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
Route::middleware(['cors'])->group(function () {
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/printers', App\Http\Controllers\PrinterController::class);
    Route::get('/printers/updateUtilities/{printer}',[\App\Http\Controllers\PrinterController::class,'updateUtilities'])->name('printers.updateUtilities');
    Route::resource('/brands', App\Http\Controllers\BrandController::class);
    Route::resource('/checkTypes', App\Http\Controllers\CheckTypeController::class);
    Route::resource('/checkModels', App\Http\Controllers\CheckModelController::class);
    Route::resource('/printerTypes', App\Http\Controllers\PrinterTypeController::class);
    Route::resource('/offices',App\Http\Controllers\OfficeController::class);
    Route::resource('/deceaseds',App\Http\Controllers\DeceasedDataController::class);
    Route::get('/deceaseds/print', [App\Http\Controllers\DeceasedDataController::class, 'print'])->name('deceaseds.print'); // is needed for easier printing
    Route::resource('/customer',App\Http\Controllers\CustomerDataController::class);
    Route::resource('/birth_certificate',App\Http\Controllers\BirthCertificateController::class);
    Route::resource('/urn_k_i_a_data',App\Http\Controllers\UrnKIADataController::class);
    Route::get('fullcalendar', [App\Http\Controllers\ScheduleController::class, 'index']);
    Route::get('/events', [App\Http\Controllers\ScheduleController::class, 'getEvents']);
    Route::get('/schedule/delete/{id}', [App\Http\Controllers\ScheduleController::class, 'deleteEvent']);
    Route::post('/schedule/{id}', [App\Http\Controllers\ScheduleController::class, 'update']);
    Route::post('/schedule/{id}/resize', [App\Http\Controllers\ScheduleController::class, 'resize']);
    Route::get('/events/search', [App\Http\Controllers\ScheduleController::class, 'search']);
    Route::view('add-schedule', 'schedule.add');
    Route::post('create-schedule', [App\Http\Controllers\ScheduleController::class, 'create']);
});

require __DIR__.'/auth.php';
});