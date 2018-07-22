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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

    Route::post('/criarProduto', 'ProductsController@criarProduto');
    Route::get('/lerProduto/{id}', 'ProductsController@lerProduto');
    Route::put('/atualizarProduto/{id}','ProductsController@atualizarProduto');
    Route::delete('/deletarProduto/{id}', 'ProductsController@deletarProduto');
    Route::post('/criarCliente', 'ClientsController@criarProduto');
    Route::get('/lerCliente/{id}', 'ClientsController@lerProduto');
    Route::put('/atualizarCliente/{id}','ClientsController@atualizarProduto');
    Route::delete('/deletarCliente/{id}', 'ClientsController@deletarProduto');
    
});
