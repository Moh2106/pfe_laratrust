<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});

Route::get('utilisateur/vice', [App\Http\Controllers\Api\UserController::class, 'create']);

Route::post('plainte/nombre', [App\Http\Controllers\Api\PlainteController::class, 'create']);

Route::post('pv/nombre', [App\Http\Controllers\Api\Pvs::class, 'create']);

/*Route::view('{any}', 'dashboard')
    ->middleware('auth')
    ->where('any', '.*');*/

require __DIR__.'/auth.php';
