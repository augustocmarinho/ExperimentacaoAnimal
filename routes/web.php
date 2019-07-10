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
});

/* Rotas Animais */
Route::group(['prefix' => 'animais'], function () {
    Route::get('/listar', 'Animais@listar');
    Route::get('/cadastrar', 'Animais@cadastrar');
    Route::get('/store', 'Animais@store');
    Route::get('/edit', 'Animais@edit');
    Route::get('/update', 'Animais@update');
    Route::get('/delete', 'Animais@delete');
});

/*Rotas Biotérios */
Route::group(['prefix' => 'bioterios'], function () {
    Route::get('/listar', 'Bioterios@listar');
    Route::get('/cadastrar', 'Bioterios@cadastrar');
});

/* Rotas Protocolos */
Route::get('/protocolos/cadastrar','Protocolo@cadastrar');
