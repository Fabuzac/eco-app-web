<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;


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
// Route::get('/{any?}', function () {
//     return view('/');
// });
Route::get('/', function () {
    return view('/welcome');
});


// Route::get('/home', [App\Http\Controllers\ControllerChartjs::class, 'Chartjs']);

Route::middleware('auth')->group(function () {
    Route::get('/welcome', [App\Http\Controllers\TestController::class, 'index'])->name('home');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// PYTHON VIEW
Route::get('/test', [App\Http\Controllers\TestController::class, 'index']);

// CELESTIAL
Route::get('/celestial', function () { return view('celestial'); });

// INNOVATORS
Route::get('/innovators', function () { return view('innovators'); });

// Renewable Energy
Route::get('/renewable-energy', function() { return view('renewable-energy'); });

Route::get('/community', function() { return view('community'); });

Route::get('/planet', function() { return view('planet'); });

Route::apiResource('api', ApiController::class);