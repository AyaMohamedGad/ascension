<?php

Route::get('/', 'HomeController@index')->name('HomePage');
Route::get('/home', 'HomeController@index');
Route::get('/aboutus', 'HomeController@about')->name('AboutPage');
Route::get('/contactus', 'HomeController@contact')->name('ContactPage');
Route::get('/lang/{lang}', 'HomeController@setLanguage')->name('setLanguage');

Route::group(['prefix' => 'training'], function () {
    Route::get('/cma', 'HomeController@cma')->name('CMAPage');
    Route::get('/cpa', 'HomeController@cpa')->name('CPAPage');
    Route::get('/cia', 'HomeController@cia')->name('CIAPage');
    Route::get('/cfa', 'HomeController@cfa')->name('CFAPage');
    Route::get('/ascension_course', 'HomeController@an_course')->name('CoursePage');
    Route::get('/ascension_ers', 'HomeController@ers')->name('ERSPage');
});

Route::group(['prefix' => 'consultancy'], function () {
    Route::get('/bookkeeping', 'HomeController@ers')->name('BookKeeping');
    Route::get('/information_system', 'HomeController@informationSys')->name('InformationSystem');
    Route::get('/feasibility_study', 'HomeController@feasibilityStudy')->name('FeasibilityStudy');
    Route::get('/business_advisory', 'HomeController@businessAdvisory')->name('BusinessAdvisory');
    Route::get('/national_fund', 'HomeController@nationalFunds')->name('NationalFunds');
});
