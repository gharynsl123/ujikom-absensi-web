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
    return view('welcome');
});

<<<<<<< HEAD
Route::resource('/admin', 'AdminController');
Route::resource('/admin/dashboard', 'AdminController');
Route::resource('/admin/user', 'UserStaffController');
=======
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index');

Route::get('/guru', 'GuruController@index');
>>>>>>> f63eed9ca1b9b8d08ab0506f858c887b5320c3d5
