<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/','HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/vraag', 'VraagEenController');
Route::get('/vraag/create', 'VraagEenController@create')->name('hypotheekBerekenen');

Route::view('/woning', 'woning')->name('woning');
Route::view('/doorstromer', 'doorstromer.doorstromer')->name('doorstromer');
Route::view('/oversluiter', 'oversluiter.oversluiter')->name('oversluiter');
Route::view('/woningalleenstaand','woningAlleenstaand')->name('woningAlleenstaand');
Route::view('/woningkind','woningKind')->name('woningKind');
Route::view('/woningpartner','woningPartner')->name('woningPartner');
Route::view('/woningalleenstaandondernemer','woningAlleenstaandOndernemer')->name('woningAlleenstaandOndernemer');
Route::view('/woningalleenstaandparticulier','woningAlleenstaandParticulier')->name('woningAlleenstaandParticulier');
Route::view('/woningkindondernemer','woningKindOndernemer')->name('woningKindOndernemer');
Route::view('/woningkindparticulier','woningKindParticulier')->name('woningKindParticulier');
Route::view('/woningpartnerondernemer','woningPartnerOndernemer')->name('woningPartnerOndernemer');
Route::view('/woningpartnerparticulier','woningPartnerParticulier')->name('woningPartnerParticulier');

Route::view('/doorstromeralleenstaand','doorstromer.doorstromerAlleenstaand')->name('doorstromerAlleenstaand');
Route::view('/doorstromerkind','doorstromer.doorstromerKind')->name('doorstromerKind');
Route::view('/doorstromerpartner','doorstromer.doorstromerPartner')->name('doorstromerPartner');
Route::view('/doorstromeralleenstaandondernemer','doorstromer.doorstromerAlleenstaandOndernemer')->name('doorstromerAlleenstaandOndernemer');
Route::view('/doorstromeralleenstaandparticulier','doorstromer.doorstromerAlleenstaandParticulier')->name('doorstromerAlleenstaandParticulier');
Route::view('/doorstromerkindondernemer','doorstromer.doorstromerKindOndernemer')->name('doorstromerKindOndernemer');
Route::view('/doorstromerkindparticulier','doorstromer.doorstromerKindParticulier')->name('doorstromerKindParticulier');
Route::view('/doorstromerpartnerondernemer','doorstromer.doorstromerPartnerOndernemer')->name('doorstromerPartnerOndernemer');
Route::view('/doorstromerpartnerparticulier','doorstromer.doorstromerPartnerParticulier')->name('doorstromerPartnerParticulier');

Route::view('/oversluiteralleenstaand','oversluiter.oversluiterAlleenstaand')->name('oversluiterAlleenstaand');
Route::view('/oversluiterkind','oversluiter.oversluiterKind')->name('oversluiterKind');
Route::view('/oversluiterpartner','oversluiter.oversluiterPartner')->name('oversluiterPartner');
Route::view('/oversluiteralleenstaandondernemer','oversluiter.oversluiterAlleenstaandOndernemer')->name('oversluiterAlleenstaandOndernemer');
Route::view('/oversluiteralleenstaandparticulier','oversluiter.oversluiterAlleenstaandParticulier')->name('oversluiterAlleenstaandParticulier');
Route::view('/oversluiterkindondernemer','oversluiter.oversluiterKindOndernemer')->name('oversluiterKindOndernemer');
Route::view('/oversluiterkindparticulier','oversluiter.oversluiterKindParticulier')->name('oversluiterKindParticulier');
Route::view('/oversluiterpartnerondernemer','oversluiter.oversluiterPartnerOndernemer')->name('oversluiterPartnerOndernemer');
Route::view('/oversluiterpartnerparticulier','oversluiter.oversluiterPartnerParticulier')->name('oversluiterPartnerParticulier');


