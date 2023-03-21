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

Route::get('/' ,'DashboardController@index');
Route::get('/home', 'DashboardController@index')->name('home');

Route::get('/absen', 'DashboardController@create');
Route::resource('/user', 'UserStaffController');

Route::get('/guru', 'GuruController@index');
