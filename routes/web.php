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

Route::get('/', 'PagesController@index');

//Route::get('/behandelingen', 'PagesController@treatments');
Route::get('/behandelingen', array('as' => 'behandelingen', 'uses' => 'PagesController@treatments'));

Route::get('/tarieven', 'PagesController@prices');
Route::get('/overons', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');


