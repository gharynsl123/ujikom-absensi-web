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


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth','ceklevel:kaprodi'])->group(function () {
    Route::resource('/absen', 'DashboardController');
    Route::resource('/user', 'UserController');

        Route::get('/' ,'DashboardController@index');
        // Route::get('/home', 'DashboardController@index')->name('home');
    
        Route::get('/absen', 'DashboardController@create');

        Route::get('/guru', 'GuruController@index');
        // Route::get('/kaprodi', 'KaprodiController@index');

        Route::resource('/izin', 'IzinController');

        Route::get('/absen', 'DashboardController@create');

        Route::resource('/profile', 'ProfileController');

        Route::resource('/kelas', 'KelasController');
        Route::resource('/siswa', 'SiswaController');
    });


Route::middleware(['auth','ceklevel:admin'])->group(function () {
    Route::resource('/absen', 'DashboardController');
    Route::resource('/user', 'UserController');

        Route::get('/' ,'DashboardController@index');
        Route::get('/home', 'DashboardController@index')->name('home');
    
        Route::get('/absen', 'DashboardController@create');

        Route::get('/guru', 'GuruController@index');
        // Route::get('/kaprodi', 'KaprodiController@index');

        Route::resource('/izin', 'IzinController');

        Route::get('/absen', 'DashboardController@create');

        Route::resource('/profile', 'ProfileController');

});

    Route::middleware(['auth','ceklevel:siswa'])->group(function () {
        Route::get('/absen', 'DashboardController@create');
        Route::resource('/izin', 'IzinController');

        Route::resource('/profile', 'ProfileController');

});

Route::resource('/kelas', 'KelasController');
Route::resource('/siswa', 'SiswaController');
Route::resource('/jurusan', 'JurusanController');
    