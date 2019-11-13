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

Auth::routes([
    Route::any('/cadastra', 'LocalVotacaoController@cadastra')->name('cadastra'),
    Route::any('/insereLocal', 'LocalVotacaoController@insereLocal')->name('insereLocal'),
    Route::any('/insereEscola', 'LocalVotacaoController@insereEscola')->name('insereEscola'),
    ]);

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/buscaLocal', 'LocalVotacaoController@verifica')->name('buscaLocal');
Route::get('/resultado', 'LocalVotacaoController@resultado')->name('resultado');


