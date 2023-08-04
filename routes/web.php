<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LiburnasController;
use App\Http\Controllers\DashboardController;

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

Route::get('/home', [DashboardController::class, 'index']);
Route::get('/chart-data', [DashboardController::class, 'chartData']);

Route::resource('libur', LiburnasController::class);



