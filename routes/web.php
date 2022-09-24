<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\FasilitasHotelController;

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


Route::get('/home', function () {
    return view('index');
});

Route::get('/booking', function () {
    return view('booking');
});

// ========== RESEPSIONIS
Route::get('/resepsionis', [ResepsionisController::class, 'index']);
Route::get('/create-resepsionis', [ResepsionisController::class, 'create'])->name('create-resepsionis');
Route::post('/simpan-resepsionis', [ResepsionisController::class, 'store'])->name('simpan-resepsionis');
Route::delete('/delete-resep/{id}', [ResepsionisController::class, 'destroy']);

// 
Route::get('/booking', [BookingController::class, 'index']);
Route::post('/save-booking', [BookingController::class, 'store'])->name('save-booking');

// KAMAR
Route::get('/kamar', [KamarController::class, 'index']);
Route::get('/create-kamar', [KamarController::class, 'create'])->name('create');
Route::post('/save-kamar', [KamarController::class, 'store'])->name('simpan');
Route::get('/edit-kamar/{id}', [KamarController::class, 'edit']);
Route::put('/update-kamar/{id}', [KamarController::class, 'update'])->name('update');
Route::delete('/delete-kamar/{id}', [KamarController::class, 'destroy']);

// FASILITAS-HOTEL
Route::get('/fasilitas', [FasilitasHotelController::class, 'index']);
Route::get('/create-fasilitas', [FasilitasHotelController::class, 'create'])->name('create-fasilitas');
Route::post('/save-fasilitas', [FasilitasHotelController::class, 'store'])->name('simpan-fasilitas');
Route::get('/edit-fasilitas/{id}', [FasilitasHotelController::class, 'edit']);
Route::put('/update-fasilitas/{id}', [FasilitasHotelController::class, 'update'])->name('update-fasilitas');
Route::delete('/delete-fasilitas/{id}', [FasilitasHotelController::class, 'destroy']);

// DETAIL
Route::get('/detail', [ResepsionisController::class, 'index']);
Route::get('/create-resepsionis', [ResepsionisController::class, 'create'])->name('create-resepsionis');
Route::post('/simpan-resepsionis', [ResepsionisController::class, 'store'])->name('simpan-resepsionis');