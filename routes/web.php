<?php





Auth::routes();

Route::get('/','HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/dashboard', 'DashboardController');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/store', 'DashboardController@store')->name('store');




