<?php

use App\Http\Controllers\DocumentModelController;
use App\Http\Controllers\Office_Choose_Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrinterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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

Route::middleware(['gzip'])->group(function () {
    Route::middleware(['cors'])->group(function () {
        Route::get('/', function () {
            return view('auth.login');
        });

        Route::get('/welcome', function () {
            return view('/deceaseds/create');
        });

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');

        Route::get('/robots.txt', function () {
            return view('welcome');
        })->middleware(['auth', 'verified'])->name('robot');
        Route::redirect('/robots.txt', '/dashboard', 301)->middleware(['auth', 'verified']);

        Route::middleware('auth')->group(function () {
            Route::resource('/printers', App\Http\Controllers\PrinterController::class);
            Route::get('/printers/updateUtilities/{printer}', [App\Http\Controllers\PrinterController::class, 'updateUtilities'])->name('printers.updateUtilities');
            Route::get('/statistics/printer', [App\Http\Controllers\PrinterController::class, 'getPrinterData'])->name('getPrinterData');
            Route::resource('/brands', App\Http\Controllers\BrandController::class);
            Route::resource('/checkTypes', App\Http\Controllers\CheckTypeController::class);
            Route::resource('/checkModels', App\Http\Controllers\CheckModelController::class);
            Route::resource('/printerTypes', App\Http\Controllers\PrinterTypeController::class);
            Route::resource('/offices', App\Http\Controllers\OfficeController::class);
            Route::resource('/deceaseds', App\Http\Controllers\DeceasedDataController::class);
            Route::get('/deceaseds/print/{id}', [App\Http\Controllers\DeceasedDataController::class, 'print'])->name('deceaseds.print'); // is needed for easier printing
            Route::resource('/customer', App\Http\Controllers\CustomerDataController::class);
            Route::resource('/orderdata', App\Http\Controllers\OrderDataController::class);
            Route::resource('/birth_certificate', App\Http\Controllers\BirthCertificateController::class);
            Route::resource('/urn_k_i_a_data', App\Http\Controllers\UrnKIADataController::class);
            Route::get('fullcalendar', [App\Http\Controllers\ScheduleController::class, 'index'])->name('fullcalendar');
            Route::get('/events', [App\Http\Controllers\ScheduleController::class, 'getEvents']);
            Route::get('/schedule/delete/{id}', [App\Http\Controllers\ScheduleController::class, 'deleteEvent']);
            Route::post('/schedule/{id}', [App\Http\Controllers\ScheduleController::class, 'update']);
            Route::post('/schedule/{id}/resize', [App\Http\Controllers\ScheduleController::class, 'resize']);
            Route::get('/events/search', [App\Http\Controllers\ScheduleController::class, 'search']);
            Route::view('add-schedule', 'schedule.add');
            Route::get('/hutesido-kalulator', [App\Http\Controllers\HutosIdoController::class, 'index']);
            Route::post('create-schedule', [App\Http\Controllers\ScheduleController::class, 'create']);
            Route::get('/hutesidocalculation/{id}', [\App\Http\Controllers\HutosIdoController::class, 'Calculation']);
            Route::any('/docedit/{any}', [\App\Http\Controllers\DocEditProxyController::class, 'index'])->where('any', '.*');
            Route::get('/select-office', [Office_Choose_Controller::class, 'select'])->name('select.office');
            Route::post('/select-office', [Office_Choose_Controller::class, 'store'])->name('store.office');
            Route::post('/upload-image', [ImageController::class, 'storeImage'])->name('upload.image');
            Route::get('/fetch-image/{id}', [ImageController::class, 'fetch'])->name('fetch.image');
            //    Route::any('/docedit/{any}', function () {
            //        return 'Matched catch-all route';
            //    })->where('any', '.*');
            Route::get('/javitas', function () {
                return view('hutesIdo.index');
            });
            Route::resource('/cars', App\Http\Controllers\CarController::class);
            Route::get('/session-data', function () {
                return response()->json(['sessionId' => session()->getId()]);
            });
            Route::get('/csrf-token', [DocumentModelController::class, 'getCsrfToken']);
            Route::view('/deceaseds/print', [\App\Http\Controllers\DeceasedDataController::class, 'print']);
        });

        require __DIR__ . '/auth.php';
    });
});
