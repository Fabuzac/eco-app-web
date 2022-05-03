<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\OtherPagesController;

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
Auth::routes();
Route::get('/', [HomeController::class, 'home'])->name('home');

// GUEST ARTICLE
Route::get('/articles', [HomeController::class, 'index'])->name('articles');
Route::get('/article/{articles:id}', [HomeController::class, 'show'])->name('article');

// OTHER PAGES
Route::get('/test', [OtherPagesController::class, 'indexTest'])->name('test');
Route::get('/celestial', [OtherPagesController::class, 'indexCelestial'])->name('celestial');
Route::get('/innovators', [OtherPagesController::class, 'indexInnovators'])->name('innovators');
Route::get('/energy', [OtherPagesController::class, 'indexEnergy'])->name('energy');
Route::get('/planet', [OtherPagesController::class, 'indexPlanet'])->name('planet');

// USER
Route::middleware('auth')->group(function () {
    Route::post('/articles', [ArticlesController::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [ArticlesController::class, 'store'])->name('articles.store');
    Route::delete('/articles/{articles:id}', [ArticlesController::class, 'destroy'])->name('articles.destroy');
    Route::get('/articles/{articles:id}', [ArticlesController::class, 'edit'])->name('articles.edit');
    Route::get('/profiles/{user:name}', [ProfilesController::class, 'show'])->name('profiles.show');
});