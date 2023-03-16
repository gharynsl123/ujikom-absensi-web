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

Route::get('/', function () {
    return view('auth.login');
});


Route::resource('/dashboard', 'DashboardController');
Route::get('/absen', 'DashboardController@create');
Route::resource('/user', 'UserStaffController');

Route::get('/guru', 'GuruController@index');
