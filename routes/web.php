<?php

use App\Http\Controllers\Auth\LoginController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');


Route::get('/clients', [ClientController::class, 'index'])->name('clients')->middleware('auth');

Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create')->middleware('auth');

Route::post('/clients', [ClientController::class, 'store'])->name('clients.store')->middleware('auth');

Route::get('/clients/{id}/edit/', [ClientController::class, 'edit'])->name('clients.edit')->middleware('auth');

Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update')->middleware('auth');

Route::delete('/clients/{id}/delete', [ClientController::class, 'destroy'])->name('clients.destroy')->middleware('auth');

Route::get('/invoices', function () {
    return view('invoices');
})->name('invoices')->middleware('auth');

Route::get('/invoices/create', function () {
    return view('invoice-create');
})->name('invoice-create')->middleware('auth');
