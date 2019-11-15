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

Route::any('/cadastra', 'LocalVotacaoController@cadastra')->name('cadastra');
Route::any('/insereLocal', 'LocalVotacaoController@insereLocal')->name('insereLocal');
Route::any('/insereEscola', 'LocalVotacaoController@insereEscola')->name('insereEscola');
Route::any('/tabela', 'LocalVotacaoController@tabela')->name('tabela');

Route::get('/', 'HomeController@index');
Route::post('/buscaLocal', 'LocalVotacaoController@verifica')->name('buscaLocal');
Route::get('/resultado', 'LocalVotacaoController@resultado')->name('resultado');
Route::get('/info', 'LocalVotacaoController@info')->name('info');
Route::get('/localCorrespondente/{idLocal}', 'LocalVotacaoController@localCorrespondente')->name('localCorrespontende');
