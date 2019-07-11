<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/notas', 'NotaController');

Route::get('/redirect/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('/callback/{provider}', 'Auth\LoginController@handleProviderCallback');