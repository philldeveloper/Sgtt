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

Route::get('/meuperfil', function () {
    return view('pesquisador.perfil');
})->name('perfil');

Route::get('/faq', function () {
    return view('pesquisador.faq.index');
})->name('faq');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contrato_sr/{id}', 'Contrato_srController@show')->name('contratosr_show');

Route::get('/contrato_sr/edit/{id}', 'Contrato_srController@edit')->name('contratosr_edit');

Route::resource('contrato_sr', 'Contrato_srController');

Route::get('contrato_sr/{id}/correcoes', 'Contrato_srController@contrato_correcoes')->name('contrato_correcoes');

Route::get('contratos', 'HomeController@contratosindex')->name('contratos-index');

Route::resource('contrato_cr', 'Contrato_crController');

Route::get('/contrato_cr/{id}', 'Contrato_crController@show')->name('contratocr_show');

Route::get('/contrato_cr/edit/{id}', 'Contrato_crController@edit')->name('contratocr_edit');

Route::resource('correcoes', 'ContratoCorrecaoController');

Route::get('/download/semrepasse/pdf/{id}', 'HomeController@generatePDF')->name('printpdf');

Route::get('/download/repasse/pdf/{id}', 'HomeController@generateRepassePDF')->name('repassepdf');

Route::resource('userUpdate', 'UserController');


