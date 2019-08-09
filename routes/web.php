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

Route::get('/contratos', function () {
    return view('contratos.tt.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/pesquisador', 'ResearcherController@index')->name('pesquisador');

Route::get('/faq', 'ResearcherController@faqindex')->name('faq');

Route::get('/contratos/tt/new', 'ResearcherController@cttindex')->name('ctt');
