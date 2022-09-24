<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Login;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PemesananController;
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
    return view('index');
});


Route::get('/tampilanAdmin', function () {
    return view('layout');
});

Route::get('/tampilanResepsionis', function () {
    return view('Pemesanan.starter');
});

Route::get('/booking', function () {
    return view('booking');
});


// LOGIN 
Route::get('login', [AuthController::class, 'index'])->name('login'); 
    Route::post('postlogin', [AuthController::class, 'postlogin'])->name('postlogin');  
    Route::get('logout', [AuthController::class, 'logout'])->name('logout'); 
 
    Route::group(['middleware' => ['auth']], function () { 
        Route::group(['middleware' => ['cek_login:admin']], function () { 
            Route::get('admin', [AdminController::class, 'index'])->name('admin',[ 
                "title" => "Dashboardadmin"]); 
        }); 
        Route::group(['middleware' => ['cek_login:resepsionis']], function () { 
            Route::get('resepsionis', [ResepsionisController::class, 'index'])->name('resepsionis',[ 
                "title" => "Dashboardresepsionis"]); 
        }); 
    });
    
// ========== PEMESANAN
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/create-pemesanan', [PemesananController::class, 'create'])->name('create-pemesanan');
Route::post('/simpan-pemesanan', [PemesananController::class, 'store'])->name('simpan-pemesanan');
Route::delete('/delete-pesan/{id}', [PemesananController::class, 'destroy']);

// BOOKING
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

// RESEPSIONIS
Route::get('/detail', [ResepsionisController::class, 'index']);
Route::get('/create-resepsionis', [ResepsionisController::class, 'create'])->name('create-resepsionis');
Route::post('/simpan-resepsionis', [ResepsionisController::class, 'store'])->name('simpan-resepsionis');