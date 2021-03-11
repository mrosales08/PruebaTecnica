<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'UsuarioController@index')->name('inicio');
Route::view('RegistroUsuario', 'RegistroUsuario')->name('RegistroUsuario');
Route::view('RegistroPagos', 'RegistroPagos')->name('RegistroPagos');
Route::view('Bienvenido', 'Bienvenido')->name('Bienvenido');
Route::view('ListaPagos', 'ListaPagos')->name('ListaPagos');

Route::get('/index','PagoController@index');

Route::POST('/agregar', 'UsuarioController@store')->name('store');
Route::POST('/insertar', 'PagoController@store')->name('storepago');

Route::POST('/Inicio', function(){
 $credentials = request()->only('email', 'password');
 if(Auth::attempt($credentials)){
     request()->session()->regenerate();
     return redirect('Bienvenido');
 }
 return redirect('Inicio');
});



