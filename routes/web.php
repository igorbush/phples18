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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'ContactController@view')->name('index');
// Route::post('/addcont', 'ContactController@add')->name('addcontact');
// Route::get('/edit', 'ContactController@edit')->name('editid');
// Route::post('/edit/save', 'ContactController@save')->name('savecontact');
Route::get('/search', 'ContactController@searchnumber')->name('searchcontact');
Route::resource('contacts', 'ContactController');