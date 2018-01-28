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

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/categorias', 'CategoriaController@lista');
Route::get('/categoriaCadastro', 'CategoriaController@cadastro');
Route::get('/produtoCadastro', 'ProdutoController@cadastro');
Route::get('/categorias/adiciona/{id?}', 'CategoriaController@adiciona');
Route::get('/produtos/adiciona/{id?}', 'ProdutoController@adiciona');
Route::get('/produtos/exclui/{id}', 'ProdutoController@exclui');
Route::get('/categorias/exclui/{id}', 'CategoriaController@exclui');
Route::get('/produtos/edita/{id}', 'ProdutoController@edita');
Route::get('/categorias/edita/{id}', 'CategoriaController@edita');
Route::get('/categorias/busca', 'CategoriaController@busca');
Route::get('/produtos/busca', 'ProdutoController@busca');

//Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
