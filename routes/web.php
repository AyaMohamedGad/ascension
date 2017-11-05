<?php

Route::get('/', 'HomeController@index')->name('HomePage');
Route::get('/home', 'HomeController@index');
Route::get('/lang/{lang}', 'HomeController@setLanguage')->name('setLanguage');

Route::group(['prefix' => 'training'], function () {
    Route::get('/cpa', 'HomeController@cpa')->name('CPAPage');
    Route::get('/ascension_ers', 'HomeController@ers')->name('ERSPage');
});

Route::group(['prefix' => 'consultancy'], function () {
    Route::get('/bookkeeping', 'HomeController@ers')->name('BookKeeping');
    Route::get('/information_system', 'HomeController@informationSys')->name('InformationSystem');
    Route::get('/feasibility_study', 'HomeController@feasibilityStudy')->name('FeasibilityStudy');
    Route::get('/business_advisory', 'HomeController@businessAdvisory')->name('BusinessAdvisory');
    Route::get('/national_fund', 'HomeController@nationalFunds')->name('NationalFunds');
});

Route::get('/contactus', 'HomeController@contact')->name('ContactPage');
Route::get('/ascension_course', 'HomeController@an_course')->name('CoursePage');