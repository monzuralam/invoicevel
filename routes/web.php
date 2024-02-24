<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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
    return view('dashboard');
})->name('dashboard');


Route::get('/clients', [ClientController::class, 'index'])->name('clients');

Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');

Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');

Route::delete('/clients/delete/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

Route::get('/invoices', function () {
    return view('invoices');
})->name('invoices');

Route::get('/invoices/create', function () {
    return view('invoice-create');
})->name('invoice-create');
