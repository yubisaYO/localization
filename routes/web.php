<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/formPendaftaran/{locale?}', [UserController::class, 'formPendaftaran'])->name('formPage'); 

Route::post('/proses-form/{locale?}', [UserController::class, 'prosesForm'])->name('mahasiswas.store');



