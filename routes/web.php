<?php

Route::get('/', 'HomeController@index')->name('HomePage');
Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'training'], function () {
    Route::get('/cpa', 'HomeController@cpa')->name('CPAPage');
    Route::get('/ascension_ers', 'HomeController@ers')->name('ERSPage');
});

Route::group(['prefix' => 'consultancy'], function () {
    Route::get('/bookkeeping', 'HomeController@ers')->name('BookKeeping');
});
