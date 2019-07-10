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

/* Rotas funcionários */
Route::group(['prefix' => 'funcionarios'], function () {
    Route::get('/listar', 'Funcionarios@listar');
    Route::get('/cadastrar', 'Funcionarios@cadastrar');
    Route::get('/store', 'Funcionarios@store');
    Route::get('/edit', 'Funcionarios@edit');
    Route::get('/update', 'Funcionarios@update');
    Route::get('/delete', 'Funcionarios@delete');
    Route::get('/getByName', 'Funcionarios@getByName');
});

/* Rotas Animais */
Route::group(['prefix' => 'animais'], function () {
    Route::get('/listar', 'Animais@listar');
    Route::get('/cadastrar', 'Animais@cadastrar');
    Route::get('/store', 'Animais@store');
    Route::get('/edit', 'Animais@edit');
    Route::get('/update', 'Animais@update');
    Route::get('/delete', 'Animais@delete');
    Route::get('/getByName', 'Animais@getByName');

});

/*Rotas Biotérios */
Route::group(['prefix' => 'bioterios'], function () {
    Route::get('/listar', 'Bioterios@listar');
    Route::get('/cadastrar', 'Bioterios@cadastrar');
    Route::get('/store', 'Bioterios@store');
    Route::get('/edit', 'Bioterios@edit');
    Route::get('/update', 'Bioterios@update');
    Route::get('/delete', 'Bioterios@delete');
    Route::get('/getByName', 'Bioterios@getByName');

});

/* Rotas Protocolos */
Route::get('/protocolos/cadastrar','Protocolo@cadastrar');
