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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Agrupar rotas em grupos depois */
Route::get('/funcionarios/listar', 'Funcionarios@listar');
Route::get('/funcionarios/cadastrar', 'Funcionarios@cadastrar');
Route::get('/funcionarios/store', 'Funcionarios@store');
Route::get('/funcionarios/edit', 'Funcionarios@edit');
Route::get('/funcionarios/update', 'Funcionarios@update');
Route::get('/funcionarios/delete', 'Funcionarios@delete');

Route::get('/animais/listar', 'Animais@listar');
Route::get('/animais/cadastrar', 'Animais@cadastrar');

Route::get('/bioterios/listar', 'Bioterios@listar');
Route::get('/bioterios/cadastrar', 'Bioterios@cadastrar');


Route::get('/protocolos/cadastrar','Protocolo@cadastrar');