<?php

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
    return view('home');
});
Route::get('listaClientes','ListaClientesController@index');
Route::get('añadirCliente','InsertarClienteController@insertform');
Route::post('create','InsertarClienteController@insert');
Route::get('index','InsertarClienteController@insertform');
Route::post('detallesCliente','DetallesClienteController@detalles');
Route::post('update','UpdateClienteController@update');
Route::post('addFile','InsertarArchivoController@insertFile');
Route::post('detallesVenta','DetallesVentaController@detalles');