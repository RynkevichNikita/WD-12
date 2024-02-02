<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DateTimeController;
use App\Http\Controllers\FictionUsersController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\ContactController;

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

Route::view('/welcome', 'anotherWelcome');

Route::get('/user/{id?}', function (string $id = 'User is anonymous') {
    return 'User ID: '.$id;
});

Route::get('/post/{slug}', function($slug) {
    return 'Success';
})->where('slug', '^[a-z0-9-]+$');

Route::match(['get', 'post'], '/submit-contact-form', function () {
    return view('post');
});

Route::post('submit-contact-form', function () {
    return 'You are goddamn right.';
});

Route::view('/greet/{name}', 'greet');

Route::get('/api/users', [FictionUsersController::class, 'show']);

Route::get('/time', [DateTimeController::class, 'show']);

Route::get('/new-home', function () {
    return 'Welcome to new Home';
});

Route::redirect('/old-home', '/new-home', 301);

Route::get('/contact', [ContactController::class, 'view']);

Route::post('/contact', [ContactController::class, 'create']);

Route::get('/calculate/{operation}/{number1}/{number2}', [CalculateController::class, 'show'])->where('operation', '[+*-/]')->whereNumber('number1')->whereNumber('number2');