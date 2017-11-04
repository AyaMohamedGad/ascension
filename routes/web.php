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

Route::get('/contactus', 'HomeController@contact')->name('ContactPage');
Route::get('/ascension_course', 'HomeController@an_course')->name('CoursePage');