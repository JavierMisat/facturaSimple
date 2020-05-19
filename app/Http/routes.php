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


use Illuminate\Support\Facades\App;

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::resource('/consultarcliente', 'FrontController@buscarCliente');

Route::resource('clientes/tipos', 'TipoClienteController@index');

Route::get('pagosusuario/{id}', 'UsuarioController@resumenUsuario');

Route::get('facturascliente/{id}', 'ClienteController@resumenCliente');


Route::get('cobertura', 'FrontController@cobertura');
Route::get('oficinas', 'FrontController@oficinas');


Route::get('clientes/facturas/{id}/edit', 'FacturaController@editFacturaCliente');

Route::get('clientes/facturas/{id}', 'FacturaController@showFacturaCliente');

Route::get('clientes/asignarfactura/{id}', 'FacturaController@create');

Route::get('estadocuenta/{id}', 'FrontController@detalleCuenta');
Route::get('estadocuenta/detallefactura/{id}', 'FrontController@showFacturaCliente');



Route::get('pagos/usuario', 'PagoController@pagosUsuario');
Route::get('pagos/municipio', 'PagoController@pagosMunicipio');
Route::get('listamunicipios/{id_departamento}', 'DepartamentoController@getMunicipios');
Route::get('/perfil', 'AdminController@perfil');
Route::get('/calendario', 'AdminController@calendario');



Route::resource('/', 'FrontController@index');
Route::resource('/admin', 'AdminController');
Route::resource('/roles', 'RolController');
Route::resource('usuarios', 'UsuarioController');
Route::resource('clientes', 'ClienteController');
Route::resource('facturas', 'FacturaController');
Route::resource('pagos', 'PagoController');
Route::resource('departamentos', 'DepartamentoController');
Route::resource('municipios', 'MunicipioController');
Route::resource('fallas', 'fallaController');

Route::resource('tipos', 'TipoClienteController');


/*
 * Buscadores
 *
 */

Route::get('buscarclientefactura', array(
    'as' => 'buscarclientefactura',
    'uses' => 'BuscadorClienteFactura@buscarClienteFactura'
));



/**
 * API to set the Session Variable for API
 */

Route::get('api/change-theme', function() {
    \Session::set('theme', \Input::get('theme'));
});

Route::get('api/change-layout', function() {
    \Session::set('layout', \Input::get('layout'));
});
