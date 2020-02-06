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
})->name('inicio');

Route::get('/meuperfil', function () {
    return view('pesquisador.perfil');
})->name('perfil');

Route::get('/faq', function () {
    return view('pesquisador.faq.index');
})->name('faq');


Auth::routes();

Route::get('/contrato_sr/{id}', 'Contrato_srController@show')->name('contratosr_show');

Route::get('/contrato_sr/edit/{id}', 'Contrato_srController@edit')->name('contratosr_edit');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('contrato_sr', 'Contrato_srController');

Route::resource('contrato_cr', 'Contrato_crController');

Route::resource('inicio', 'IndexController');

Route::resource('correcoes', 'ContratoCorrecaoController');

Route::get('/customer/print-pdf/{id}', 'HomeController@generatePDF')->name('printpdf');
// Route::get('/customer/print-pdf/{id}', [ 'as' => 'customer.printpdf', 'uses' => 'HomeController@generatePDF']);

