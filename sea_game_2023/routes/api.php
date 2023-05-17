<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BookingController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('events')->group(function () {

    Route::get('/', [EventController::class, 'index']);

    Route::post('/', [EventController::class, 'store']);

    Route::get('/{id}', [EventController::class, 'show']);

    Route::put('/{id}', [EventController::class, 'update']);

    Route::delete('/{id}', [EventController::class, 'destroy']);
});
Route::prefix('bookings')->group(function () {

    Route::get('/', [BookingController::class, 'index']);

    Route::post('/', [BookingController::class, 'store']);

    Route::get('/{id}', [BookingController::class, 'show']);

    Route::put('/{id}', [BookingController::class, 'update']);

    Route::delete('/{id}', [BookingController::class, 'destroy']);
});