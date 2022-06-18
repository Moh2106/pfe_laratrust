<?php

use App\Http\Controllers\Api\PlainteController;
use App\Http\Controllers\Api\PlainteDesigner;
use App\Http\Controllers\Api\PlainteReponseController;
use App\Http\Controllers\Api\PvDesigner;
use App\Http\Controllers\Api\PvReponseController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\Pvs;
use App\Models\PvReponse;
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
Route::apiResource('utilisateur', UserController::class);
Route::apiResource('plainte', PlainteController::class);
Route::apiResource('pv', Pvs::class);
Route::apiResource('plainteDesigner', PlainteDesigner::class);
Route::apiResource('pvDesigner', PvDesigner::class);
Route::apiResource('plainteReponse', PlainteReponseController::class);
Route::apiResource('pvReponse', PvReponseController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
