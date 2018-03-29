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
Route::get('/', 'PageController@getIndex');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/changepassword','HomeController@showChangePasswordForm');
Route::post('/home/changepassword','HomeController@changePassword');
Route::resource('/task', 'TaskController');