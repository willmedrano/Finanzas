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


Route::get('/hola', function () {
    return view('plantilla');
});
Route::get('/', function () {
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
Route::resource('pagos',"controlPago");
Route::resource('aux4',"auxiliarControl2");
Route::match(['get','post'],'/VerificarEPCaja/{codigopro}','ventas@VerificarEPCaja');
Route::match(['get','post'],'/VerificarEPUnidades/{codigopro}','ventas@VerificarEPUnidades');
Route::match(['get','post'],'/llenadoProducto2/{codigopro}','ventas@llenadoProducto2');




Route::get('error', function(){ 
    abort(404);
});
Route::get('500', function(){ 
    abort(500);
});
Route::get('503', function(){ 
    abort(503);
});
Route::resource('bitacoras',"controladorBitacora");

Route::resource('usuarios',"ControladorUsuarios");
//rutas accessibles slo si el usuario no se ha logueado
Route::get('sesion',"ControladorUsuarios@getSesion");


Route::group(['middleware' => 'guest'], function () {

	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']); 
	// Registration routes...
	
	//Route::get('registro', 'Auth\AuthController@getRegister');
	//Route::post('registro', ['as' => 'auth/registro', 'uses' => 'Auth\AuthController@postRegister']);
	
	Route::get('/', 'ControladorUsuarios@admin');
Route::get('inicio',"ControladorUsuarios@MostrarInicio");
});

//Lo que le agregado jonathan
Route::resource('reportes',"PdfControlador");
Route::get('facturas/{id}',"PdfControlador@facturaC_F");
Route::get('factura',"PdfControlador@facturaC_F");
Route::get('facturacf',"PdfControlador@facturaC_C");