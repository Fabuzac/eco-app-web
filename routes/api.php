<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    
});

Route::get('/', ['App\Http\Controllers\ApiController', 'listApi'],"api@list")->name("api.list");
Route::post('/add', ['App\Http\Controllers\ApiController', 'listApi'], "api@add")->name('api.add');
Route::patch('/done/{id}', "api@done")->name('api.done');
Route::delete('/delete/{id}', "api@remove")->name('api.remove');

// /api/ 	            list() 		                        GET
// /api/add 	        add(Request $request) 	Request 	POST
// /api/done/{id}     	done($id)               	id  	PATCH
// /api/delete/{id}    	remove($id)             	id  	DELETE