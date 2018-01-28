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

Route::get('/', 'ContactController@view');
Route::post('/addcont', 'ContactController@add')->name('addcontact');
Route::get('/edit/{id}', 'ContactController@edit');
Route::post('/edit/{id}/save', 'ContactController@save');
Route::get('/search', 'ContactController@searchnumber');