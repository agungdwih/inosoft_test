<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\StokController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('me', [AuthController::class, 'me']);
});

// Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
Route::get('mobil', [MobilController::class, 'index']);
Route::post('mobil', [MobilController::class, 'store']);
Route::get('mobil/{id}', [MobilController::class, 'show']);
Route::put('mobil/{id}', [MobilController::class, 'update']);
Route::delete('mobil/{id}', [MobilController::class, 'destroy']);
// });


Route::get('motor', [MotorController::class, 'index']);
Route::post('motor', [MotorController::class, 'store']);
Route::get('motor/{id}', [MotorController::class, 'show']);
Route::put('motor/{id}', [MotorController::class, 'update']);
Route::delete('motor/{id}', [MotorController::class, 'destroy']);



Route::get('kendaraan', [KendaraanController::class, 'index']);
Route::post('kendaraan', [KendaraanController::class, 'store']);
Route::get('kendaraan/{id}', [KendaraanController::class, 'show']);
Route::put('kendaraan/{id}', [KendaraanController::class, 'update']);
Route::delete('kendaraan/{id}', [KendaraanController::class, 'destroy']);

Route::get('penjualan', [PenjualanController::class, 'index']);
Route::post('penjualan', [PenjualanController::class, 'store']);
Route::get('penjualan/{id}', [PenjualanController::class, 'show']);
Route::put('penjualan/{id}', [PenjualanController::class, 'update']);
Route::delete('penjualan/{id}', [PenjualanController::class, 'destroy']);

Route::get('stok', [StokController::class, 'index']);