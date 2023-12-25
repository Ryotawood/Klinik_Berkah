<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

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
Route::get('/pasien', [PasienController::class, 'index']);
// Route::get('/pasien', 'PasienController@index')->name('api.pasien.index');
// Route::get('/pasien/{id}', [App\Http\Controllers\PasienController::class, 'show']);
Route::post('/pasien', [App\Http\Controllers\PasienController::class, 'store']);
Route::patch('/pasien/{id}', [App\Http\Controllers\PasienController::class, 'update']);
Route::delete('/pasien/{id}', [App\Http\Controllers\PasienController::class, 'destroy']);
