<?php

use App\Http\Controllers\MotorController;
use App\Http\Controllers\MobilController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('motor', [MotorController::class, 'index']);
Route::post('motor', [MotorController::class, 'store']);
Route::get('motor/{id}', [MotorController::class, 'show']);
Route::put('motor/{id}', [MotorController::class, 'update']);
Route::delete('motor/{id}', [MotorController::class, 'destroy']);

Route::get('mobil', [MobilController::class, 'index']);
Route::post('mobil', [MobilController::class, 'store']);