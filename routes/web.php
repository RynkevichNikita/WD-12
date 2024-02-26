<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentsReportController;
use App\Http\Controllers\WelcomeController;

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

Route::get('reports', [PaymentsReportController::class, 'index']);

Route::post('reports', [PaymentsReportController::class, 'show']);

Route::get('register', [WelcomeController::class, 'index']);

Route::post('register', [WelcomeController::class, 'store']);