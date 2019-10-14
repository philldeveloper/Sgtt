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

Route::get('/contratos/semrepasse', function () {
    return view('contratos.tt.semrepasse.index');
});

Route::get('/contratos/repasse', function () {
    return view('contratos.tt.repasse.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/pesquisador', 'ResearcherController@index')->name('pesquisador');

Route::get('/faq', 'ResearcherController@faqindex')->name('faq');

Route::get('/contratos/tt/semrepasse/new', 'ResearcherController@semrepasseindex')->name('semrepasse');

Route::get('/contratos/tt/comrepasse/new', 'ResearcherController@repasseindex')->name('repasse');
