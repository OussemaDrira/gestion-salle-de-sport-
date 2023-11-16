<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntreneurController;
use App\Http\Controllers\CourEntrenementController;

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
Route::middleware('api')->group(function () {
    Route::resource('entreneurs', EntreneurController::class);
    });
    Route::middleware('api')->group(function () {
        Route::resource('cour_entrenements', CourEntrenementController::class);
        });
        Route::middleware('api')->group(function () {
            Route::resource('cours_entreneur', CourEntrenementController::class);
            });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
