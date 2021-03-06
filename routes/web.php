<?php

Auth::routes();

Route::group(['middleware' => 'locale'], function () {
    Route::get('/lang/{lang}', 'WebsiteController@setLanguage')->name('setLanguage');

    Route::get('/', 'WebsiteController@index')->name('HomePage');
    Route::get('/home', 'WebsiteController@index');
    Route::get('/aboutus', 'WebsiteController@about')->name('AboutPage');
    Route::get('/contactus', 'WebsiteController@contact')->name('ContactPage');
    Route::get('/careers', 'WebsiteController@careers')->name('CareersPage');
    Route::get('/new/{id}', 'WebsiteController@viewNew')->name('ViewNewPage');

    Route::group(['prefix' => 'training'], function () {
        Route::get('/cma', 'WebsiteController@cma')->name('CMAPage');
        Route::get('/cpa', 'WebsiteController@cpa')->name('CPAPage');
        Route::get('/cia', 'WebsiteController@cia')->name('CIAPage');
        Route::get('/cfa', 'WebsiteController@cfa')->name('CFAPage');
        Route::get('/ascension_course', 'WebsiteController@an_course')->name('CoursePage');
        Route::get('/ascension_ers', 'WebsiteController@ers')->name('ERSPage');
    });

    Route::group(['prefix' => 'consultancy'], function () {
        Route::get('/bookkeeping', 'WebsiteController@bookkeeping')->name('BookKeeping');
        Route::get('/information_system', 'WebsiteController@informationSys')->name('InformationSystem');
        Route::get('/feasibility_study', 'WebsiteController@feasibilityStudy')->name('FeasibilityStudy');
        Route::get('/business_advisory', 'WebsiteController@businessAdvisory')->name('BusinessAdvisory');
        Route::get('/national_fund', 'WebsiteController@nationalFunds')->name('NationalFunds');
    });

    Route::get('/logout', 'WebsiteController@logout')->name('Logout');
});

Route::group(['prefix' => 'administration', 'middleware' => 'auth'], function () {
    Route::get('/', 'WebsiteController@adminHome')->name('AdminHome');
    // news
    Route::get('/new', 'NewsController@index')->name('NewsIndex');
    Route::get('/new/view/{id}', 'NewsController@view')->name('ViewNew');
    Route::get('/new/edit/{id}', 'NewsController@edit')->name('EditNew');
    Route::put('/new/update/{id}', 'NewsController@update')->name('UpdateNew');
    Route::get('/new/add', 'NewsController@add')->name('AddNew');
    Route::post('/new/create', 'NewsController@create')->name('CreateNew');
    Route::get('/new/delete/{id}', 'NewsController@delete')->name('DeleteNew');

    // experts
    Route::get('/expert', 'ExpertController@index')->name('ExpertsIndex');
    Route::get('/expert/view/{id}', 'ExpertController@view')->name('ViewExpert');
    Route::get('/expert/edit/{id}', 'ExpertController@edit')->name('EditExpert');
    Route::put('/expert/update/{id}', 'ExpertController@update')->name('UpdateExpert');
    Route::get('/expert/add', 'ExpertController@add')->name('AddExpert');
    Route::post('/expert/create', 'ExpertController@create')->name('CreateExpert');
    Route::get('/expert/delete/{id}', 'ExpertController@delete')->name('DeleteExpert');

    // photo gallery
    Route::get('/photo_gallery', 'GalleryController@index')->name('PhotoGalleryIndex');
    Route::post('/photo_gallery/update', 'GalleryController@update')->name('UpdatePhotoGallery');

    // partners
    Route::get('/partner', 'PartnerController@index')->name('PartnerIndex');
    Route::post('/partner/update', 'PartnerController@update')->name('UpdatePartner');

    // courses' time
    Route::get('/course', 'CourseController@index')->name('CoursesIndex');
    Route::get('/course/edit/{id}', 'CourseController@edit')->name('EditCourse');
    Route::put('/course/update/{id}', 'CourseController@update')->name('UpdateCourse');

    // change password
    Route::get('/password', 'AdminController@password')->name('ChangePassword');
    Route::post('/password', 'AdminController@change')->name('SavePassword');

});
