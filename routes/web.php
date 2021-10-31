<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\ArticlesController::class, 'homeAsideArticles']);

// Route::get('/', function () {
//     return view('/home');
// });

// Route::get('/home', [App\Http\Controllers\ControllerChartjs::class, 'Chartjs']);

Route::middleware('auth')->group(function () {
    // Route::get('/home', [App\Http\Controllers\WelcomeController::class, 'index'])->name('home');
});

// Several Articles
Route::get('/articles', [App\Http\Controllers\ArticlesController::class, 'index']);

// One Article
Route::get('/article/{articles:id}', [App\Http\Controllers\ArticlesController::class, 'oneArticle']);

// Create Article
Route::post('/articles', [App\Http\Controllers\ArticlesController::class, 'store']);

// Delete Article
Route::delete('/articles/{articles:id}', [App\Http\Controllers\ArticlesController::class, 'destroy']);

// PYTHON VIEW
Route::get('/test', [App\Http\Controllers\TestController::class, 'index']);

// CELESTIAL
Route::get('/celestial', [App\Http\Controllers\CelestialController::class, 'index']);

// INNOVATORS
Route::get('/innovators', [App\Http\Controllers\InnovatorsController::class, 'index']);

// RENEWABLE ENERGY
Route::get('/renewable-energy', [App\Http\Controllers\EnergyController::class, 'index']);

// PLANET
Route::get('/planet', [App\Http\Controllers\PlanetController::class, 'index']);

// API
Route::apiResource('api', App\Http\Controllers\Api\ApiController::class);

Auth::routes();