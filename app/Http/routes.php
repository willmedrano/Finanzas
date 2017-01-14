<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('plantilla');
});
Route::get('/hola', function () {
    return view('plantilla');
});

Route::resource('producto',"ControladorProducto");

Route::resource('prove',"controladorproveedor2");

Route::resource('inve',"inventario");

Route::resource('compra',"contoladorCompra");
Route::resource('aux2',"auxiliarControl");
Route::match(['get','post'],'/llenadoProducto/{codigopro}','contoladorCompra@llenadoProducto');
Route::resource('lotes',"controladorLotes");

Route::resource('clientes',"ControladorClientes");

Route::resource('carteras',"ControladorCartera");

Route::resource('ventas',"ventas");
Route::resource('aux4',"auxiliarControl2");
Route::match(['get','post'],'/VerificarEPCaja/{codigopro}','ventas@VerificarEPCaja');
Route::match(['get','post'],'/VerificarEPUnidades/{codigopro}','ventas@VerificarEPUnidades');
Route::match(['get','post'],'/llenadoProducto2/{codigopro}','ventas@llenadoProducto2');