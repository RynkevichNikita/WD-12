<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\MaintenanceMode;
use App\Http\Controllers\Payment;
use App\Http\Middleware\AdminPayment;

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

Route::view('maintenance', 'maintenance')->name('maintenance')->withoutMiddleware([MaintenanceMode::class]);

Route::view('loginadmin', 'login')->middleware('admin');

Route::get('payments', [Payment::class, 'index'])->name('user');

Route::get('admin/payments', [Payment::class, 'adminIndex'])->name('admin');