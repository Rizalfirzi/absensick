<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkpController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\LiburnasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HargajabatanController;
use App\Http\Controllers\HarikerjapuasaController;

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

Auth::routes();

Route::middleware('auth.route')->group(function () {
    // Route yang memerlukan autentikasi di sini
    Route::get('/home', [DashboardController::class, 'index']);
    Route::get('/chart-data', [DashboardController::class, 'chartData']);

    Route::resource('libur', LiburnasController::class);

    Route::resource('pegawai', PegawaiController::class);
    // Route::get('/get-satkers/{direktoratId}', [PegawaiController::class, 'getSatkersByDirektorat']);

    // Route::get('/get-satkers/{direktoratId}', [PegawaiController::class, 'getSatkersByDirektorat']);
    // Route::get('/get-filtered-pegawai', [PegawaiController::class, 'getFilteredPegawai']);
    Route::get('/get-satker/{direktoratId}', [PegawaiController::class, 'getSatker']);
    Route::post('/pegawai', [PegawaiController::class, 'filter'])->name('pegawai.filter');

    Route::resource('harikerjapuasa', HarikerjapuasaController::class);

    Route::resource('hargajabatan', HargajabatanController::class);
    
    Route::resource('skp', SkpController::class);
});




