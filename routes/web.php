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

Route::get('/', 'PageController@home');
Route::get('v1', 'PageController@v1');
Route::get('/autocomplete/fruit/{search}', 'PageController@fruitSearch');
Route::post('/sendemail', 'PageController@sendEmail')->name('sendemail');

//Route::get('/lunchrota/alert/4.0.0', 'LunchRotaVersionController@checkAlert')->name('checkalert');
