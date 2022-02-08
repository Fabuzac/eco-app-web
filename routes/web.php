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

Route::get('/', [App\Http\Controllers\MainController::class, 'home'])->name('home');

// GUEST ARTICLE
Route::get('/articles', [App\Http\Controllers\MainController::class, 'index'])->name('articles');
Route::get('/article/{articles:id}', [App\Http\Controllers\MainController::class, 'show'])->name('article');

// OTHER PAGES
Route::get('/test', [App\Http\Controllers\OtherPagesController::class, 'indexTest'])->name('test');
Route::get('/celestial', [App\Http\Controllers\OtherPagesController::class, 'indexCelestial'])->name('celestial');
Route::get('/innovators', [App\Http\Controllers\OtherPagesController::class, 'indexInnovators'])->name('innovators');
Route::get('/energy', [App\Http\Controllers\OtherPagesController::class, 'indexEnergy'])->name('energy');
Route::get('/planet', [App\Http\Controllers\OtherPagesController::class, 'indexPlanet'])->name('planet');

// USER
Route::middleware('auth')->group(function () {    

    Route::post('/articles', [App\Http\Controllers\ArticlesController::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [App\Http\Controllers\ArticlesController::class, 'store'])->name('articles.store');
    Route::delete('/articles/{articles:id}', [App\Http\Controllers\ArticlesController::class, 'destroy'])->name('articles.destroy');
    Route::get('/articles/{articles:id}', [App\Http\Controllers\ArticlesController::class, 'edit'])->name('articles.edit');
    Route::get('/profiles/{user:name}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profiles.show');
});

// API
Route::apiResource('api', App\Http\Controllers\Api\ApiController::class);
Auth::routes();