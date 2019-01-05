<?php


use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/','HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/dashboard', 'DashboardController');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/store', 'DashboardController@store')->name('store');

route::get('/user/{id}/roles', function($id){
    return User::find($id)->roles;
});




