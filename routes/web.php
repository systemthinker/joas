<?php





Auth::routes();

Route::get('/','HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/vraag', 'VraagEenController');
Route::get('/vraag/create', 'VraagEenController@create')->name('hypotheekBerekenen');
Route::get('/dashboard', 'DashboardController@index');




