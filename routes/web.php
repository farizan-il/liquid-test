<?php

use App\Http\Controllers\AuthentifikasiController;
use App\Http\Controllers\Gondowangi\HR\DashboardController;
use App\Http\Controllers\Gondowangi\HR\EvaluasiKaryawanController;
use App\Http\Controllers\Gondowangi\HR\ManajemenModulController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('/', AuthentifikasiController::class);
Route::resource('/dashboard', DashboardController::class);
Route::resource('/manajemenModul', ManajemenModulController::class);
Route::resource('/evaluasikaryawan', EvaluasiKaryawanController::class);