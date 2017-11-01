<?php

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/training/cpa', 'HomeController@cpa')->name('CPAPage');
Route::get('/training/ascension_ers', 'HomeController@ers')->name('ERSPage');
