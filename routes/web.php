<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PersonController;
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
    return view('welcome');
});

Route::prefix('v1/persons')->group(function () {
    Route::get('/',[ PersonController::class, 'get']);
    Route::post('/',[ PersonController::class, 'create']);
    Route::delete('/{id}',[ PersonController::class, 'delete']);
    Route::get('/{id}',[ PersonController::class, 'getById']);
    Route::put('/{id}',[ PersonController::class, 'update']);
});
