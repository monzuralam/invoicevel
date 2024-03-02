<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InvoiceController;

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

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');


Route::get('/clients', [ClientController::class, 'index'])->name('clients')->middleware('auth');

Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create')->middleware('auth');

Route::post('/clients', [ClientController::class, 'store'])->name('clients.store')->middleware('auth');

Route::get('/clients/{id}/edit/', [ClientController::class, 'edit'])->name('clients.edit')->middleware('auth');

Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update')->middleware('auth');

Route::delete('/clients/{id}/delete', [ClientController::class, 'destroy'])->name('clients.destroy')->middleware('auth');

Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices')->middleware('auth');

Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoice-create')->middleware('auth');
