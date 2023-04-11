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

    // Route untuk pengguna dengan peran admin
    // Route::middleware(['auth', 'admin'])->group(function () {
    //     Route::resource('/user', 'UserController');

    //     Route::get('/' ,'DashboardController@index');
    //     Route::get('/home', 'DashboardController@index')->name('home');
    
    //     Route::get('/absen', 'DashboardController@create');

    //     Route::get('/guru', 'GuruController@index');
    //     Route::get('/kaprodi', 'KaprodiController@index');

    //     Route::resource('/izin', 'IzinController');

    //     Route::get('/absen', 'DashboardController@create');

    //     Route::resource('/profile', 'ProfileController');

    //     Route::resource('/kelas', 'KelasController');
    // });

    Route::middleware(['checkrole:admin'])->group(function () {
        Route::resource('/user', 'UserController');

        Route::get('/' ,'DashboardController@index');
        Route::get('/home', 'DashboardController@index')->name('home');
    
        Route::get('/absen', 'DashboardController@create');

        Route::get('/guru', 'GuruController@index');
        // Route::get('/kaprodi', 'KaprodiController@index');

        Route::resource('/izin', 'IzinController');

        Route::get('/absen', 'DashboardController@create');

        Route::resource('/profile', 'ProfileController');

        Route::resource('/kelas', 'KelasController');
    });


    // Route::middleware(['checkRole:guru'])->group(function () {
    //     // Route::resource('/user', 'UserController');

    //     Route::get('/' ,'DashboardController@index');
    //     Route::get('/home', 'DashboardController@index')->name('home');
    
    //     Route::get('/absen', 'DashboardController@create');

    //     Route::get('/guru', 'GuruController@index');
    //     Route::get('/kaprodi', 'KaprodiController@index');

    //     // Route::resource('/izin', 'IzinController');

    //     // Route::get('/absen', 'DashboardController@create');

    //     Route::resource('/profile', 'ProfileController');

    //     Route::resource('/kelas', 'KelasController');
    // });