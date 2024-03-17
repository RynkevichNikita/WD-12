<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\OrderManagerController;

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

Route::post('login',[UserAuthController::class,'login']);  

Route::middleware('auth:sanctum')->group(function () {

    Route::post('logout',[UserAuthController::class,'logout']);

    Route::post('update', [OrderManagerController::class, 'update']);

    Route::post('delete', [OrderManagerController::class, 'delete']);

    Route::post('create', [OrderManagerController::class, 'create']);
});