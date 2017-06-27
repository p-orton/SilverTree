<?php

// TEMP
Route::get('/', function () {return view('welcome');});

//*************         CMS Routes         ****************//
Route::get('/admin', 'Cms\CmsController@index')->name('admin');

Auth::routes();