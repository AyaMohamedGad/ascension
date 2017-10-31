<?php

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/training/cpa', 'HomeController@cpa')->name('CPAPage');
