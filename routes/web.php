<?php

Route::get('/','WellcomeController@index');
Route::get('/support','WellcomeController@support');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
