<?php

use app\http\Controllers\ProductoController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/productos', 'app/Http/Controllers/ProductoController@index');
Route::get('/productos', [ProductoController::class, 'index']);
//Route::post('/productos', 'app\Http\Controllers\ProductoController@store');
//Route::put('/productos/{id}', 'app\Http\Controllers\ProductoController@update');
//Route::delete('/productos/{id}', 'app\Http\Controllers\ProductoController@destroy');