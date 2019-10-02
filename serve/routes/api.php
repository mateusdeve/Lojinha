<?php

use Illuminate\Http\Request;

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
header('Access-Control-Allow-Origin: http://localhost:3000');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('produtos','ProdutosController@index');

Route::post('store', 'ProdutosController@store');
