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


Route::group(['middleware' => 'web'], function (){

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/vendedores', 'VendedorController@index')->middleware('auth')->name('vendedores');	
Route::get('/vendedores/novo', 'VendedorController@novo')->middleware('auth');
	
Route::get('/produtos', 'ProdutoController@index')->middleware('auth')->name('produtos');
Route::get('/produtos/novo', 'ProdutoController@novo')->middleware('auth');

Route::get('/categorias', 'CategoriaController@index')->middleware('auth')->name('categorias');
Route::get('/categorias/novo', 'CategoriaController@novo')->middleware('auth');

Route::get('/vendas', 'VendaController@index')->middleware('auth')->name('vendas');

});