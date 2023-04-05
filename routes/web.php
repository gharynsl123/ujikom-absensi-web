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

    Route::middleware(['checkRole:admin'])->group(function () {
        Route::resource('/user', 'UserStaffController');

        Route::get('/' ,'DashboardController@index');
        Route::get('/home', 'DashboardController@index')->name('home');
    
        Route::get('/absen', 'DashboardController@create');

        Route::get('/guru', 'GuruController@index');
        Route::get('/kaprodi', 'KaprodiController@index');

        Route::resource('/izin', 'IzinController');

        Route::get('/absen', 'DashboardController@create');

        Route::resource('/profile', 'ProfileController');
    });

    // Route::middleware(['checkRole:guru'])->group(function () {
    //     Route::get('/' ,'DashboardController@index');
    //     Route::get('/home', 'DashboardController@index')->name('home');
    
    //     Route::get('/absen', 'DashboardController@create');
    //     Route::get('/guru', 'GuruController@index');
    // });



    // Route::middleware(['checkRole:siswa'])->group(function () {
    //     Route::get('/absen', 'DashboardController@create');
    // });