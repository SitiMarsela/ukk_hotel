<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ResepsionisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('starter');
});

// ========== RESEPSIONIS
Route::get('/resepsionis', [ResepsionisController::class, 'index']);
Route::get('/create-resepsionis', [ResepsionisController::class, 'create'])->name('create-resepsionis');
Route::post('/simpan-resepsionis', [ResepsionisController::class, 'store'])->name('simpan-resepsionis');

// KAMAR
Route::get('/kamar', [KamarController::class, 'index']);
Route::get('/create-kamar', [KamarController::class, 'create'])->name('create');
Route::post('/save-kamar', [KamarController::class, 'store'])->name('simpan');
Route::get('/edit-kamar/{id}', [KamarController::class, 'edit']);
Route::put('/update-kamar/{id}', [KamarController::class, 'update'])->name('update');
Route::delete('/delete-kamar/{id}', [KamarController::class, 'destroy']);