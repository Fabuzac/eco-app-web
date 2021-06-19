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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// INNOVATORS
Route::get('/innovators', [App\Http\Controllers\InnovatorsController::class, 'index']);
// Route::get('/innovators', function () { return view('innovators'); });

// CELESTIAL
Route::get('/celestial', function () { return view('celestial'); });
