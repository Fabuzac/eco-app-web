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

Route::get('/', function () {
    return view('/home');
});

// Route::get('/home', [App\Http\Controllers\ControllerChartjs::class, 'Chartjs']);

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\TestController::class, 'index'])->name('home');
});

// PYTHON VIEW
Route::get('/test', [App\Http\Controllers\TestController::class, 'index']);

// COMMUNITY 
Route::get('/community', [App\Http\Controllers\ArticlesController::class, 'index']);

// CELESTIAL
Route::get('/celestial', [App\Http\Controllers\CelestialController::class, 'index']);

// INNOVATORS
Route::get('/innovators', [App\Http\Controllers\InnovatorsController::class, 'index']);

// RENEWABLE ENERGY
Route::get('/renewable-energy', [App\Http\Controllers\EnergyController::class, 'index']);

// PLANET
Route::get('/planet', [App\Http\Controllers\PlanetController::class, 'index']);

// API
Route::apiResource('api', ApiController::class);
